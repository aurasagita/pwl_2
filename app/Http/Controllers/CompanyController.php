<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function product()
    {
        echo "
        <ul>
            <li>
                <a href='https://www.educastudio.com/category/marbel-edu-games'>Product 1</a>
            </li>
            <li>
                <a href='https://www.educastudio.com/category/marbel-and-friends-kids-games'>Product 2</a>
            </li>
            <li>
                <a href='https://www.educastudio.com/category/riri-story-books'>Product 3</a>
            </li>
            <li>
                <a href='https://www.educastudio.com/category/kolak-kids-songs'>Product 4</a>
            </li>
        </ul>
        ";
    }

    public function news()
    {
        echo "
        <ul>
            <li>
                <a href='https://www.educastudio.com/news'>News 1</a>
            </li>
            <li>
                <a href='https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19'>News 2</a>
            </li>
          
        </ul>
        ";
    }

    public function program()
    {
        echo "
            <ul>
                <li>
                    <a href='https://www.educastudio.com/program/karir'>Program 1</a>
                </li>
                <li>
                    <a href='https://www.educastudio.com/program/magang'>Program 2</a>
                </li>
                <li>
                    <a href='https://www.educastudio.com/program/kunjungan-industri'>Program 3</a>
                </li>
            </ul>
        ";
    }

    public function aboutus()
    {
        echo "
            <a href='https://www.educastudio.com/about-us'>About Us</a>
        ";
    }

    public function index()
    {
        return 'LAMAN KONTAK KAMI 
        <br>
        <ul>
            <li> WHATSAPP : 082234519963 </li>
            <li> EMAIL    : aurasagita2122@gmail.com </li>
        </ul>
        <label>Kontak</label> <br>
            <input placeholder="Masukkan kontak">
            <button>Submit</button>
        ';
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        
        Return "Selamat Datang Di Website HYBE Labels Anda Berada Di tampilan HOME";
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
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
}
