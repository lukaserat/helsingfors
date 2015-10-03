<?php


namespace App\Http\Controllers;


class ActivitiesController extends Controller
{


    /**
     * getIndex
     *
     *
     * @return void
     * @access  public
     **/
    public function getAdd()
    {
        return view('sistema.activities.add');
    }

    /**
     * getIndex
     *
     *
     * @return void
     * @access  public
     **/
    public function getList()
    {
        return view('sistema.activities.list');
    }


    /**
     * getIndex
     *
     *
     * @return void
     * @access  public
     **/
    public function getSlider()
    {
        return view('sistema.activities.slider');
    }

}
