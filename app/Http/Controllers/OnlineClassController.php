<?php

namespace App\Http\Controllers;

use App\Model\OnlineClass;
use Illuminate\Http\Request;

class OnlineClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $online = OnlineClass::all();

        $return = [
            "classes" => $online,
        ];

        return view("online-class.list", $return);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("online-class.form-insert");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "namaKelas" => "required|unique:classes,namaKelas",
            "shortDesc"  => "required",
            "desc"       => "required",
        ]);

        $classes = new OnlineClass();

        $classes->nama_kelas = $request->post("namaKelas");
        $classes->shortDesc = $request->post("shortDesc");
        $classes->desc = $request->post("longDesc");

        if ($classes->save()) {
            return redirect(route("online-class.index"))
                ->with("pesan", "Data Berhasil Di Simpan")
                ->with("code", "success");
        } else {
            return redirect(route("online-class.create"))
                ->with("pesan", "Data Gagal Di Simpan")
                ->with("code", "warning")
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class = OnlineClass::find($id);

        $return = [
            "class" => $class,
        ];

        return view("online-class.form-update", $return);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $class = OnlineClass::find($id);

        $class->nama_kelas = $request->post("namaKelas");
        $class->shortDesc = $request->post("shortDesc");
        $class->desc = $request->post("longDesc");

        if ($class->save()) {
            return redirect(route("online-class.index"))
                ->with("pesan", "Data Berhasil Di Simpan")
                ->with("code", "success");
        } else {
            return redirect(route("online-class.create"))
                ->with("pesan", "Data Gagal Di Simpan")
                ->with("code", "warning")
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (OnlineClass::destroy($id)) {
            return redirect(route("online-class.index"));
        } else {
            return redirect(route("online-class.index"));
        }
    }
}
