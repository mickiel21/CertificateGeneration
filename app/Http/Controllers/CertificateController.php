<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;
use PDF;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificates = Certificate::latest()->paginate(5);

        return view('certificates.index',compact('certificates'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function generate($id){
      $certificate = Certificate::findOrFail($id);
        
      $data = [
        'certification_id' => '#'.$certificate->id .'00000000',
        'server_id' => '#'.$certificate->id .'BBBBBBBBBBB',
        'lms_id' => '#'.$certificate->id .'AAAAAAAAAAAAA',
        'name' => $certificate->user->name,
        'user_id' => '#'.$certificate->id .'AGDSDSFSD',
        'course_title' => $certificate->lesson->description,
        'certification_date' => date('d-m-Y', strtotime($certificate->created_at)),
        'course_id' => '#222#ADLSDF3',
      ];

    //   return view('certificates.certificatePdf');
    
      $pdf = PDF::loadView('certificates.certificatePdf', $data);
      $pdf->setPaper('A3', 'portrait');

      return $pdf->stream('certificate.pdf');
    }
}
