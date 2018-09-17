<?php

namespace App\Http\Controllers;



use App\IconCheckbox;
use Illuminate\Http\Request;
//use Barryvdh\DomPDF\PDF as PDF;
use Illuminate\Support\Facades\App as App;
use PDF;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Template;
use App\Checkbox;
use App\Main_name;

class TemplateController extends Controller
{
    public function show(){
        //dd(base_path()."/public/images/1-1.png");
        $text = Template::get();
        $checkbox = Checkbox::get();
        $main_name = Main_name::get();
        $icon_checkbox = IconCheckbox::get();
       // dd($text);
        //dd($icon_checkbox[42]->value);
        //dd($main_name[3]->value);
        // dd($text[0]->name);
        //dd($icon_checkbox);
        return view('template_pdf',[
            'texts' => $text,
            'checkbox' => $checkbox,
            'main_name' => $main_name,
            'icon_checkbox' => $icon_checkbox
        ]);
    }
    public function template_pdf_make(Request $request){
        //dd($request);
        //dd($request);
        //dd(count($request->checkbox0));
        Template::truncate();
        Checkbox::truncate();
        Main_name::truncate();
        IconCheckbox::truncate();

        $data = array();
        for($i=-2;$i<87;$i++){
            $editor = "editor$i";
            $data[] = array('text'=>$request->$editor,'name' => "editor$i");
        }
        Template::insert($data);

        $data = array();
        for($i=0;$i<83;$i=$i+2){
           // dd($request->main_name[85]);
            //dd((isset($request->main_name[85])));
            if(isset($request->main_name[$i])){
                $value = $request->main_name[$i];
            }
            else{
                $value = NULL;
            }
            //dd($value);
            $name = "main_name$i";
            $data[] = array('name' => $name, 'value' => $value);
        }
        Main_name::insert($data);

        $data = array();
        for($i=0;$i<84;$i++){
            if(isset($request->checkbox[$i])){
                $value = 1;
            }
            else{
                $value = NULL;
            }
            $name = "checkbox$i";
            $data[] = array('name' => $name, 'value' => $value);
        }
        Checkbox::insert($data);

        $data = array();
        for($i=0;$i<84;$i=$i+2){
            $checkbox_name = "checkbox$i";
          //  dd($request->$checkbox_name);
            if(isset($request->$checkbox_name)){
                $value = key($request->$checkbox_name);
            }
            else{
                $value = NULL;
            }
            $data[] = array('name' => "icon_checkbox$i", 'value' => $value);
        }
        IconCheckbox::insert($data);

        for($i=0;$i<84;$i=$i+2){
            $checkbox_name = "checkbox$i";
            //  dd($request->$checkbox_name);
            //dd(count($request->$checkbox_name));
            if(count($request->$checkbox_name)>1){
                return Redirect::back()->withErrors(['Вы выбрали слишком много иконок в пункте №'.(($i/2)+1)]);
            }
        }
        for($i=0;$i<84;$i++){
            if(isset($request->checkbox[$i])){
                if(isset($request->checkbox[$i+1]) && ($i+1)%2 != 0){
                    return Redirect::back()->withErrors(['Вы выбрали 2 варианта текста сразу в пункте №'.(($i/2)+1)]);
                }
            }
        }

$editor_name_1 = 'editor-1';
$editor_name_2 = 'editor-2';
        //dd(IconCheckbox::get());
        $editors = array();
        for($i=0;$i<87;$i++){
            $editor = "editor$i";
            $editors[] = $request->$editor;
        }
        //dd($request->$editor_name_1);

        $data = [
            'icon_checkboxes' => IconCheckbox::get(),
            'checkboxes' => $request->checkbox,
            'main_names' => $request->main_name,
            'editor_m_1' => $request->$editor_name_1,
            'editor_m_2' => $request->$editor_name_2,
            'editors' => $editors
        ];

        $pdf = PDF::loadView('template_make_pdf', $data, [], [
            'title' => 'Another Title',
            'margin_top' => 35,
            'margin_bottom' => 35
        ]);
        //dd();

        return $pdf->stream('document.pdf');
    }
}
