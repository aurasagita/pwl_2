<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeBladeControllerr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', ['teks' => 'Selamat Datang Di Beranda Home']);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function product()
    {
       return view('product',
       ['link' => 'PRODUCT LIST <br>
       <ol>
       <li><a href="https://www.educastudio.com/category/marbel-edu-games">Marbel Edu Games</a></li>
       <li><a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">Marbel and Friends Kids Game</a></li>
       <li><a href="https://www.educastudio.com/category/riri-story-books">Riri Story Books</a></li> 
       </ol>
       ']
       );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function news($n)
    {
        return view('news',
       ['news' => 'NEWS LIST : <br>
       <ol>
       <li><a href="https://www.educastudio.com/category/marbel-edu-games">Hybe Entertaiment VS SM Entertaiment</a></li>
       <li><a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">J-HOPE BTS Wamil</a></li>
       <li><a href="https://www.educastudio.com/category/riri-story-books">Kita Bisa hIDUP sEHAT</a></li> 
       </ol>
       ']
       );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function program()
    {
        return view('program',
       ['program' => 'PROGRAM LIST KESUKAAN KELUARGA : <br>
       <ol>
       <li><a href="https://www.educastudio.com/category/marbel-edu-games">Boys Planet 999</a></li>
       <li><a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">Girls Planet 999</a></li>
       <li><a href="https://www.educastudio.com/category/riri-story-books">Produce 101 Season 2</a></li> 
       </ol>
       ']
       );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function aboutus()
    {
        return view('about-us',
       ['aboutus' => 'ABOUT US : <br>
       <a>Bisa Dilihat Dilink Di Bawah Ini :</a>
       <li><a href="https://www.educastudio.com/category/marbel-edu-games">About Us</a></li>
       ']
       );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function bill()
    {
   
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
