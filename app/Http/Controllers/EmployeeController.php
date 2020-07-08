<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\EmployeeCreateRequest;
use App\Http\Requests\EmployeeUpdateRequest;
use App\Http\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Genera vista employee index (Listado empleados)
     * @return View > employee.index
     */
	public function index() {
		$action = app('request')->route()->uri;
		$registers = Employee::paginate($this->paginate);
		$title="Lista Empleados";
		return view("employee.index", compact("registers","title","action"));
	}

    /**
     * Genera vista employee create (nuevo empleado)
     * @return View > employee.create
     */
    public function create()
    {  
		$title="Nuevo Empleado";
		$sex = Employee::getArraySex();
		$position = Employee::getArrayPosition();
        return view("employee.create", compact("title","sex", "position"));
    }

    /**
     * Logica para crear un nuevo empleado
     *
     * @param  $request EmployeeCreateRequest
     * @return redirect (employees)
     */
    public function store(EmployeeCreateRequest $request)
    {
		try {
			$employee=new Employee;
			$employee->code=$request->input("code");
			$employee->name=$request->input("name");
			$employee->lastname=$request->input("lastname");
			$employee->sex=$request->input("sex");
			$employee->position=$request->input("position");
			$employee->save();
		} catch(\Exception $e) {
			return back() -> withInput() -> withErrors($e->getMessage());
		}
		Session::flash("message", $this->successTxt("registrada"));
		return redirect("employees");
    }

     /**
     * Detalle vista employee show (detalle empleado)
	 * @param  $id Integer
     * @return View > employee.show
     */
    public function show($id)
    {
		$title="Detalle Empleado";
		$sex = Employee::getArraySex();
		$position = Employee::getArrayPosition();
		try {
			$register= Employee::findOrFail($id);
		} catch(\Exception $e) {
			return back() -> withInput() -> withErrors($e->getMessage());
		}
		return view("employee.show", compact("title","sex","position","register"));
    }

    /**
     * Genera vista employee edit (editar empleado)
	 * @param  $id Integer
     * @return View > employee.edit
     */
    public function edit($id)
    {

        $title="Editar Empleado";
		$sex = Employee::getArraySex();
		$position = Employee::getArrayPosition();

		try {
			$register= Employee::findOrFail($id);
		} catch(\Exception $e) {
			return back() -> withInput() -> withErrors($e->getMessage());
		}

		return view("employee.edit", compact("title","sex","position","register"));
    }

	 /**
     * Logica para editar un  empleado
     *
	 * @param  $id Integer
     * @param  $request EmployeeUpdateRequest
     * @return redirect (employees)
     */
    public function update($id, EmployeeUpdateRequest $request)
    {
		try {
			$employee= Employee::findOrFail($id);
			$employee->name=$request->input("name");
			$employee->lastname=$request->input("lastname");
			$employee->sex=$request->input("sex");
			$employee->position=$request->input("position");
			$employee->save();
		} catch(\Exception $e) {
			return back() -> withInput() -> withErrors($e->getMessage());
		}
		
		Session::flash("message", $this->successTxt("actualizada"));
		return redirect("employees");
	}
	
	/**
     * Logica para borrar un empleado
     *
	 * @param  $id Integer
     * @return redirect (employees)
     */
    public function destroy($id)
    {
		try {
			$employee= Employee::findOrFail($id);
			$employee->delete(); 
		} catch(\Exception $e) {
			return back() -> withInput() -> withErrors($e->getMessage());
		}
		Session::flash("message", $this->successTxt("borrada"));
		return redirect("employees");
    }
	

}
