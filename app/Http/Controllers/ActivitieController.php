<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\ActivitieRequest;
use App\Http\Models\Activitie;
use App\Http\Models\Employee;

class ActivitieController extends Controller
{
    /**
     * Genera vista activitie index (Listado actividades)
     * @return View > activitie.index
     */
	public function index() {
		$action = app('request')->route()->uri;
		$registers = Activitie::paginate($this->paginate);
		$title="Lista Actividades";
		return view("activitie.index", compact("registers","title","action"));
	}

    /**
     * Genera vista activitie create (nueva actividad)
     * @return View > activitie.create
     */
    public function create()
    {  
		$title="Nueva Actividad";
		$employees = Employee::all();
        return view("activitie.create", compact("title","employees"));
    }

    /**
     * Logica para crear un nueva actividad
     *
     * @param  $request ActivitieRequest
     * @return redirect (activities)
     */
    public function store(ActivitieRequest $request)
    {
		try {
			$activitie=new Activitie;
			$activitie->title=$request->input("title");
			$activitie->description=$request->input("description");
			$activitie->estimate_date=$request->input("date")." ".$request->input("hour");
			$activitie->status=0;
			$activitie->employee_id=$request->input("employee_id");
			$activitie->save();
		} catch(\Exception $e) {
			return back() -> withInput() -> withErrors($e->getMessage());
		}
		Session::flash("message", $this->successTxt("registrada"));
		return redirect("activities");
    }

     /**
     * Detalle vista Activitie show (detalle actividad)
	 * @param  $id Integer
     * @return View > Activitie.show
     */
    public function show($id)
    {
		$title="Detalle Empleado";
		try {
			$register= Activitie::findOrFail($id);
		} catch(\Exception $e) {
			return back() -> withInput() -> withErrors($e->getMessage());
		}
		return view("Activitie.show", compact("title","register"));
    }

    /**
     * Genera vista activitie edit (editar actividad)
	 * @param  $id Integer
     * @return View > activitie.edit
     */
    public function edit($id)
    {

        $title="Editar Actividad";
		$employees = Employee::all();
		try {
			$register= Activitie::findOrFail($id);
		} catch(\Exception $e) {
			return back() -> withInput() -> withErrors($e->getMessage());
		}

		return view("Activitie.edit", compact("title","register","employees"));
    }

	 /**
     * Logica para editar una actividad
     *
	 * @param  $id Integer
     * @param  $request ActivitieRequest
     * @return redirect (activities)
     */
    public function update($id, ActivitieRequest $request)
    {
		try {
			$activitie= Activitie::findOrFail($id);
			$activitie->title=$request->input("title");
			$activitie->description=$request->input("description");
			$activitie->estimate_date=$request->input("date")." ".$request->input("hour");
			//$activitie->status=$request->input("status");
			$activitie->employee_id=$request->input("employee_id");
			$activitie->save();
		} catch(\Exception $e) {
			return back() -> withInput() -> withErrors($e->getMessage());
		}
		
		Session::flash("message", $this->successTxt("actualizada"));
		return redirect("activities");
	}
	
	/**
     * Logica para borrar una actividad
     *
	 * @param  $id Integer
     * @return redirect (activities)
     */
    public function destroy($id)
    {
		try {
			$activitie= Activitie::findOrFail($id);
			$activitie->delete(); 
		} catch(\Exception $e) {
			return back() -> withInput() -> withErrors($e->getMessage());
		}
		Session::flash("message", $this->successTxt("borrada"));
		return redirect("activities");
	}
	

	/**
     * Logica para actualizar el estatus de un actividad
     *
	 * @param  $id Integer
     * @return redirect (activities)
     */
	public function status($id)
    {
		try {
			$activitie=Activitie::findOrFail($id);
			$activitie->status=($activitie->status=='1'?'0':'1');
			$activitie->save();
		} catch(\Exception $e) {
			return back() -> withInput() -> withErrors($e->getMessage());
		}
		
		Session::flash("message", $this->successTxt("actualizada"));
		return redirect("activities");
    }
	

}
