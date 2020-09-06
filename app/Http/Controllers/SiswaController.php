<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_siswa = \App\Siswa::where('nama_depan', 'LIKE', '%'.$request->cari.'%')->get();
            // $data_siswa = \App\Siswa::where('nama_belakang', 'LIKE', '%'.$request->cari.'%')->get();
            // $data_siswa = \App\Siswa::where('agama', 'LIKE', '%'.$request->cari.'%')->get();
            // $data_siswa = \App\Siswa::where('alamat', 'LIKE', '%'.$request->cari.'%')->get();
        } else {
            $data_siswa = \App\Siswa::all();
        }
        return view('siswa.index', ['data_siswa' => $data_siswa]);
    }

    public function insert(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'nama_depan' => 'required|min:5',
            'nama_belakang' => 'required',
            'email' => 'required|email|unique:users',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
        ]);


        // Insert to table User
        $user = new \App\User;
        $user->role = 'siswa';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt('rahasia');
        $user->remember_token = str_random(60);
        $user->save();

        // Insert to table Siswa
        $request->request->add(['user_id' => $user->id]);
        $siswa = \App\Siswa::create($request->all());
        return redirect('/siswa')->with('Success','Data Success Input');
    }

    public function edit($id)
    {
        $siswa = \App\Siswa::find($id);
        return view('siswa/edit',['siswa' => $siswa]);
    }
    
    public function update(Request $request, $id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->update($request->all());
        if($request->hasFile('avatar')) {
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $siswa->avatar = $request->file('avatar')->getClientOriginalName();
            $siswa->save();
        }
        return redirect('/siswa')->with('Success','Data Success update');
    }

    public function delete($id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->delete($siswa);
        return redirect('/siswa')->with('Success','Data Success delete');
    }

    public function profile($id)
    {
        $siswa = \App\Siswa::find($id);
        $matapelajaran = \App\mapel::all();

        //insert data to chart
        $categories = [];
        $data = [];
        //looping data chart
        foreach ($matapelajaran as $mp) {
        if ($siswa->mapel()->wherePivot('mapel_id',$mp->id)->first()) {
            $categories[] = $mp->nama;
            $data[] = $siswa->mapel()->wherePivot('mapel_id',$mp->id)->first()->pivot->nilai;
            }
        }
        //dd(json_encode($data));
        //dd(json_encode($categories));
        return view('siswa.profile',['siswa' => $siswa, 'matapelajaran' => $matapelajaran, 'categories' => $categories, 'data' => $data]);
    }
    public function addnilai(Request $request,$id)
    {
        //validate form
        $this->validate($request,[
            'nilai' => 'required|numeric',
        ]);

        //dd($request->all());
        $siswa = \App\Siswa::find($id);        
        if ($siswa->mapel()->where('mapel_id',$request->mapel)->exists()){
            return redirect('siswa/'.$id. '/profile')->with('Error','Data Mapel Sudah Ada');
        }
        $siswa->mapel()->attach($request->mapel,['nilai' => $request->nilai]);

        return redirect('siswa/' .$id. '/profile')->with('Success','Data Success adding');
    }
}
