<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PDF maker</title>


    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
          type="text/css">
    <link href="{{ asset('css/icons/icomoon/styles.css') }} " rel="stylesheet"/>
    <link href="{{ asset('css/bootstrap.css') }} " rel="stylesheet"/>
    <link href="{{ asset('css/core.css') }} " rel="stylesheet"/>
    <link href="{{ asset('css/components.css') }} " rel="stylesheet"/>
    <link href="{{ asset('css/colors.css') }} " rel="stylesheet"/>
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{ asset('js/plugins/loaders/pace.min.js') }}"></script>
    <script src="{{ asset('js/core/libraries/jquery.min.js') }}"></script>
    <script src="{{ asset('js/core/libraries/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/loaders/blockui.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('js/plugins/forms/selects/select2.min.js') }}"></script>

    <script src="{{ asset('js/core/app.js') }}"></script>
    <!-- /theme JS files -->
    <script src="{{ asset('/js/ckeditor_middle/ckeditor.js') }}" type="text/javascript" charset="utf-8"></script>

</head>

<body>
<div class="page-container">
    <div class="page-content">
        <div class="content-wrapper">
            <form role="form" method="post" action="{{ route('template_pdf_make') }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="content">
                    <div class="row">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <strong>{{$errors->first()}}</strong>
                            </div>
                        @endif
                        <div class="col-md-12">
                            <div class="panel panel-flat">
                                <div style="display: inline-block;" class="panel-heading">
                                    <h2>Титульная страница</h2>
                                </div>
                                <div style="display: inline-block;" class="navbar-right">

                                </div>
                                <div class="row">
                                    <div class="panel-body">
                                        <div class="col-md-12">
                           <textarea name="editor85" id="editor85">
                               @if(isset($texts[87]))
                                   {{$texts[87]->text}}
                               @endif
                           </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-flat">
                                <div style="display: inline-block;" class="panel-heading">
                                    <h2>Оглавление</h2>
                                </div>
                                <div style="display: inline-block;" class="navbar-right">

                                </div>
                                <div class="row">
                                    <div class="panel-body">
                                        <div class="col-md-12">
                           <textarea name="editor86" id="editor86">
                               @if(isset($texts[88]))
                                   {{$texts[88]->text}}
                               @endif
                           </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel panel-flat">
                            <div style="display: inline-block;" class="panel-heading">
                                <h2>Условные обозначения</h2>
                            </div>
                            <div style="display: inline-block;" class="navbar-right">

                            </div>
                            <div class="row">
                                <div class="panel-body">
                                    <div class="col-md-12">
                           <textarea name="editor-2" id="editor-2">
                               @if(isset($texts[0]))
                                   {{$texts[0]->text}}
                               @endif
                           </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="panel panel-flat">
                            <div style="display: inline-block;" class="panel-heading">
                                <h2>Введение</h2>
                            </div>
                            <div style="display: inline-block;" class="navbar-right">

                            </div>
                            <div class="row">
                                <div class="panel-body">
                                    <div class="col-md-12">
                           <textarea name="editor-1" id="editor-1">
                               @if(isset($texts[1]))
                                   {{$texts[1]->text}}
                               @endif
                           </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-flat">
                                <h2>SEO-аудит сайта</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-flat">
                                <h3>Внутренний SEO аудит</h3>
                            </div>
                        </div>
                    </div>
                    @for($i=0;$i<12;$i=$i+2)
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-flat">
                                    <div class="container-fluid">
                                        <div class="form-group mar_input">
                                            <div class="col-md-6">
                                                <input type="text" name="main_name[{{$i}}]"
                                                       @if(isset($main_name[$i/2]))value="{{$main_name[$i/2]->value}}"
                                                       @endif
                                                       class="form-control" id="name_search" placeholder="">
                                            </div>
                                        </div>
                                        <div class="mar_checkbox">
                                            {!!  Html::image('images/1-1.png','pic',array('height'=>'30px', 'width'=>'30px'))  !!}
                                            <input type="checkbox" name="checkbox{{$i}}[1]"
                                                   @if(isset($icon_checkbox[$i/2]))
                                                   @if($icon_checkbox[$i/2]->value == 1)
                                                   checked
                                                    @endif
                                                    @endif
                                            >
                                            {!!  Html::image('images/2-1.png','pic',array('height'=>'30px', 'width'=>'30px'))  !!}
                                            <input type="checkbox" name="checkbox{{$i}}[2]"
                                                   @if(isset($icon_checkbox[$i/2]))
                                                   @if($icon_checkbox[$i/2]->value == 2)
                                                   checked
                                                    @endif
                                                    @endif
                                            >
                                            {!!  Html::image('images/3-1.png','pic',array('height'=>'30px', 'width'=>'30px'))  !!}
                                            <input type="checkbox" name="checkbox{{$i}}[3]"
                                                   @if(isset($icon_checkbox[$i/2]))
                                                   @if($icon_checkbox[$i/2]->value == 3)
                                                   checked
                                                    @endif
                                                    @endif
                                            >
                                            {!!  Html::image('images/4-1.png','pic',array('height'=>'30px', 'width'=>'30px'))  !!}
                                            <input type="checkbox" name="checkbox{{$i}}[4]"
                                                   @if(isset($icon_checkbox[$i/2]))
                                                   @if($icon_checkbox[$i/2]->value == 4)
                                                   checked
                                                    @endif
                                                    @endif
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-flat">
                                    <input type="checkbox" name="checkbox[{{$i}}]"
                                           @if(isset($checkbox[$i]))
                                           @if(!is_null($checkbox[$i]->value))
                                           checked
                                            @endif
                                            @endif
                                    >
                                    <div style="display: inline-block;" class="panel-heading">

                                    </div>
                                    <div style="display: inline-block;" class="navbar-right">

                                    </div>
                                    <div class="row">
                                        <div class="panel-body">
                                            <div class="col-md-12">
                           <textarea name="editor{{$i}}" id="editor{{$i}}">
                               @if(isset($texts[$i+2]))
                                   {{$texts[$i+2]->text}}
                               @endif
                           </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-flat">
                                    <input type="checkbox" name="checkbox[{{$i+1}}]"
                                           @if(isset($checkbox[$i+1]))
                                           @if(!is_null($checkbox[$i+1]->value))
                                           checked
                                            @endif
                                            @endif
                                    >
                                    <div style="display: inline-block;" class="panel-heading">

                                    </div>
                                    <div style="display: inline-block;" class="navbar-right">

                                    </div>
                                    <div class="row">
                                        <div class="panel-body">
                                            <div class="col-md-12">
                           <textarea name="editor{{$i+1}}" id="editor{{$i+1}}">
                               @if(isset($texts[$i+3]))
                                   {{$texts[$i+3]->text}}
                               @endif
                           </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endfor
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-flat">
                                <h3>Внешний SEO аудит</h3>
                            </div>
                        </div>
                    </div>
                    @for($i=12;$i<24;$i=$i+2)
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-flat">
                                    <div class="container-fluid">
                                        <div class="form-group mar_input">
                                            <div class="col-md-6">
                                                <input type="text" name="main_name[{{$i}}]"
                                                       @if(isset($main_name[$i/2]))
                                                       value="{{$main_name[$i/2]->value}}"
                                                       @endif
                                                       class="form-control" id="name_search" placeholder="">
                                            </div>
                                        </div>
                                        <div class="mar_checkbox">
                                            {!!  Html::image('images/1-1.png','pic',array('height'=>'30px', 'width'=>'30px'))  !!}
                                            <input type="checkbox" name="checkbox{{$i}}[1]"
                                                   @if(isset($icon_checkbox[$i/2]))
                                                   @if($icon_checkbox[$i/2]->value == 1)
                                                   checked
                                                    @endif
                                                    @endif
                                            >
                                            {!!  Html::image('images/2-1.png','pic',array('height'=>'30px', 'width'=>'30px'))  !!}
                                            <input type="checkbox" name="checkbox{{$i}}[2]"
                                                   @if(isset($icon_checkbox[$i/2]))
                                                   @if($icon_checkbox[$i/2]->value == 2)
                                                   checked
                                                    @endif
                                                    @endif
                                            >
                                            {!!  Html::image('images/3-1.png','pic',array('height'=>'30px', 'width'=>'30px'))  !!}
                                            <input type="checkbox" name="checkbox{{$i}}[3]"
                                                   @if(isset($icon_checkbox[$i/2]))
                                                   @if($icon_checkbox[$i/2]->value == 3)
                                                   checked
                                                    @endif
                                                    @endif
                                            >
                                            {!!  Html::image('images/4-1.png','pic',array('height'=>'30px', 'width'=>'30px'))  !!}
                                            <input type="checkbox" name="checkbox{{$i}}[4]"
                                                   @if(isset($icon_checkbox[$i/2]))
                                                   @if($icon_checkbox[$i/2]->value == 4)
                                                   checked
                                                    @endif
                                                    @endif
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-flat">
                                    <input type="checkbox" name="checkbox[{{$i}}]"
                                           @if(isset($checkbox[$i]))
                                           @if(!is_null($checkbox[$i]->value))
                                           checked
                                            @endif
                                            @endif
                                    >
                                    <div style="display: inline-block;" class="panel-heading">

                                    </div>
                                    <div style="display: inline-block;" class="navbar-right">

                                    </div>
                                    <div class="row">
                                        <div class="panel-body">
                                            <div class="col-md-12">
                           <textarea name="editor{{$i}}" id="editor{{$i}}">
                               @if(isset($texts[$i+2]))
                                   {{$texts[$i+2]->text}}
                               @endif
                           </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-flat">
                                    <input type="checkbox" name="checkbox[{{$i+1}}]"
                                           @if(isset($checkbox[$i+1]))
                                           @if(!is_null($checkbox[$i+1]->value))
                                           checked
                                            @endif
                                            @endif
                                    >
                                    <div style="display: inline-block;" class="panel-heading">

                                    </div>
                                    <div style="display: inline-block;" class="navbar-right">

                                    </div>
                                    <div class="row">
                                        <div class="panel-body">
                                            <div class="col-md-12">
                           <textarea name="editor{{$i+1}}" id="editor{{$i+1}}">
                               @if(isset($texts[$i+3]))
                                   {{$texts[$i+3]->text}}
                               @endif
                           </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endfor
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-flat">
                                <h2>Технический аудит</h2>
                            </div>
                        </div>
                    </div>
                    @for($i=24;$i<32;$i=$i+2)
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-flat">
                                    <div class="container-fluid">
                                        <div class="form-group mar_input">
                                            <div class="col-md-6">
                                                <input type="text" name="main_name[{{$i}}]"
                                                       @if(isset($main_name[$i/2]))
                                                       value="{{$main_name[$i/2]->value}}"
                                                       @endif
                                                       class="form-control" id="name_search" placeholder="">
                                            </div>
                                        </div>
                                        <div class="mar_checkbox">
                                            {!!  Html::image('images/1-1.png','pic',array('height'=>'30px', 'width'=>'30px'))  !!}
                                            <input type="checkbox" name="checkbox{{$i}}[1]"
                                                   @if(isset($icon_checkbox[$i/2]))
                                                   @if($icon_checkbox[$i/2]->value == 1)
                                                   checked
                                                    @endif
                                                    @endif
                                            >
                                            {!!  Html::image('images/2-1.png','pic',array('height'=>'30px', 'width'=>'30px'))  !!}
                                            <input type="checkbox" name="checkbox{{$i}}[2]"
                                                   @if(isset($icon_checkbox[$i/2]))
                                                   @if($icon_checkbox[$i/2]->value == 2)
                                                   checked
                                                    @endif
                                                    @endif
                                            >
                                            {!!  Html::image('images/3-1.png','pic',array('height'=>'30px', 'width'=>'30px'))  !!}
                                            <input type="checkbox" name="checkbox{{$i}}[3]"
                                                   @if(isset($icon_checkbox[$i/2]))
                                                   @if($icon_checkbox[$i/2]->value == 3)
                                                   checked
                                                    @endif
                                                    @endif
                                            >
                                            {!!  Html::image('images/4-1.png','pic',array('height'=>'30px', 'width'=>'30px'))  !!}
                                            <input type="checkbox" name="checkbox{{$i}}[4]"
                                                   @if(isset($icon_checkbox[$i/2]))
                                                   @if($icon_checkbox[$i/2]->value == 4)
                                                   checked
                                                    @endif
                                                    @endif
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-flat">
                                    <input type="checkbox" name="checkbox[{{$i}}]"
                                           @if(isset($checkbox[$i]))
                                           @if(!is_null($checkbox[$i]->value))
                                           checked
                                            @endif
                                            @endif
                                    >
                                    <div style="display: inline-block;" class="panel-heading">

                                    </div>
                                    <div style="display: inline-block;" class="navbar-right">

                                    </div>
                                    <div class="row">
                                        <div class="panel-body">
                                            <div class="col-md-12">
                           <textarea name="editor{{$i}}" id="editor{{$i}}">
                               @if(isset($texts[$i+2]))
                                   {{$texts[$i+2]->text}}
                               @endif
                           </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-flat">
                                    <input type="checkbox" name="checkbox[{{$i+1}}]"
                                           @if(isset($checkbox[$i+1]))
                                           @if(!is_null($checkbox[$i+1]->value))
                                           checked
                                            @endif
                                            @endif
                                    >
                                    <div style="display: inline-block;" class="panel-heading">

                                    </div>
                                    <div style="display: inline-block;" class="navbar-right">

                                    </div>
                                    <div class="row">
                                        <div class="panel-body">
                                            <div class="col-md-12">
                           <textarea name="editor{{$i+1}}" id="editor{{$i+1}}">
                               @if(isset($texts[$i+3]))
                                   {{$texts[$i+3]->text}}
                               @endif
                           </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endfor
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-flat">
                                <h3>Анализ технического состояния сайта</h3>
                            </div>
                        </div>
                    </div>
                    @for($i=32;$i<64;$i=$i+2)
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-flat">
                                    <div class="container-fluid">
                                        <div class="form-group mar_input">
                                            <div class="col-md-6">
                                                <input type="text" name="main_name[{{$i}}]"
                                                       @if(isset($main_name[$i/2]))
                                                       value="{{$main_name[$i/2]->value}}"
                                                       @endif
                                                       class="form-control" id="name_search" placeholder="">
                                            </div>
                                        </div>
                                        <div class="mar_checkbox">
                                            {!!  Html::image('images/1-1.png','pic',array('height'=>'30px', 'width'=>'30px'))  !!}
                                            <input type="checkbox" name="checkbox{{$i}}[1]"
                                                   @if(isset($icon_checkbox[$i/2]))
                                                   @if($icon_checkbox[$i/2]->value == 1)
                                                   checked
                                                    @endif
                                                    @endif
                                            >
                                            {!!  Html::image('images/2-1.png','pic',array('height'=>'30px', 'width'=>'30px'))  !!}
                                            <input type="checkbox" name="checkbox{{$i}}[2]"
                                                   @if(isset($icon_checkbox[$i/2]))
                                                   @if($icon_checkbox[$i/2]->value == 2)
                                                   checked
                                                    @endif
                                                    @endif
                                            >
                                            {!!  Html::image('images/3-1.png','pic',array('height'=>'30px', 'width'=>'30px'))  !!}
                                            <input type="checkbox" name="checkbox{{$i}}[3]"
                                                   @if(isset($icon_checkbox[$i/2]))
                                                   @if($icon_checkbox[$i/2]->value == 3)
                                                   checked
                                                    @endif
                                                    @endif
                                            >
                                            {!!  Html::image('images/4-1.png','pic',array('height'=>'30px', 'width'=>'30px'))  !!}
                                            <input type="checkbox" name="checkbox{{$i}}[4]"
                                                   @if(isset($icon_checkbox[$i/2]))
                                                   @if($icon_checkbox[$i/2]->value == 4)
                                                   checked
                                                    @endif
                                                    @endif
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-flat">
                                    <input type="checkbox" name="checkbox[{{$i}}]"
                                           @if(isset($checkbox[$i]))
                                           @if(!is_null($checkbox[$i]->value))
                                           checked
                                            @endif
                                            @endif
                                    >
                                    <div style="display: inline-block;" class="panel-heading">

                                    </div>
                                    <div style="display: inline-block;" class="navbar-right">

                                    </div>
                                    <div class="row">
                                        <div class="panel-body">
                                            <div class="col-md-12">
                           <textarea name="editor{{$i}}" id="editor{{$i}}">
                                 @if(isset($texts[$i+2]))
                                   {{$texts[$i+2]->text}}
                               @endif
                           </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-flat">
                                    <input type="checkbox" name="checkbox[{{$i+1}}]"
                                           @if(isset($checkbox[$i+1]))
                                           @if(!is_null($checkbox[$i+1]->value))
                                           checked
                                            @endif
                                            @endif
                                    >
                                    <div style="display: inline-block;" class="panel-heading">

                                    </div>
                                    <div style="display: inline-block;" class="navbar-right">

                                    </div>
                                    <div class="row">
                                        <div class="panel-body">
                                            <div class="col-md-12">
                           <textarea name="editor{{$i+1}}" id="editor{{$i+1}}">
                                @if(isset($texts[$i+3]))
                                   {{$texts[$i+3]->text}}
                               @endif
                           </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endfor
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-flat">
                                <h2>Юзабилити-аудит</h2>
                            </div>
                        </div>
                    </div>
                    @for($i=64;$i<76;$i=$i+2)
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-flat">
                                    <div class="container-fluid">
                                        <div class="form-group mar_input">
                                            <div class="col-md-6">
                                                <input type="text" name="main_name[{{$i}}]"
                                                       @if(isset($main_name[$i/2]))
                                                       value="{{$main_name[$i/2]->value}}"
                                                       @endif
                                                       class="form-control" id="name_search" placeholder="">
                                            </div>
                                        </div>
                                        <div class="mar_checkbox">
                                            {!!  Html::image('images/1-1.png','pic',array('height'=>'30px', 'width'=>'30px'))  !!}
                                            <input type="checkbox" name="checkbox{{$i}}[1]"
                                                   @if(isset($icon_checkbox[$i/2]))
                                                   @if($icon_checkbox[$i/2]->value == 1)
                                                   checked
                                                    @endif
                                                    @endif
                                            >
                                            {!!  Html::image('images/2-1.png','pic',array('height'=>'30px', 'width'=>'30px'))  !!}
                                            <input type="checkbox" name="checkbox{{$i}}[2]"
                                                   @if(isset($icon_checkbox[$i/2]))
                                                   @if($icon_checkbox[$i/2]->value == 2)
                                                   checked
                                                    @endif
                                                    @endif
                                            >
                                            {!!  Html::image('images/3-1.png','pic',array('height'=>'30px', 'width'=>'30px'))  !!}
                                            <input type="checkbox" name="checkbox{{$i}}[3]"
                                                   @if(isset($icon_checkbox[$i/2]))
                                                   @if($icon_checkbox[$i/2]->value == 3)
                                                   checked
                                                    @endif
                                                    @endif
                                            >
                                            {!!  Html::image('images/4-1.png','pic',array('height'=>'30px', 'width'=>'30px'))  !!}
                                            <input type="checkbox" name="checkbox{{$i}}[4]"
                                                   @if(isset($icon_checkbox[$i/2]))
                                                   @if($icon_checkbox[$i/2]->value == 4)
                                                   checked
                                                    @endif
                                                    @endif
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-flat">
                                    <input type="checkbox" name="checkbox[{{$i}}]"
                                           @if(isset($checkbox[$i]))
                                           @if(!is_null($checkbox[$i]->value))
                                           checked
                                            @endif
                                            @endif
                                    >
                                    <div style="display: inline-block;" class="panel-heading">

                                    </div>
                                    <div style="display: inline-block;" class="navbar-right">

                                    </div>
                                    <div class="row">
                                        <div class="panel-body">
                                            <div class="col-md-12">
                           <textarea name="editor{{$i}}" id="editor{{$i}}">
                               @if(isset($texts[$i+2]))
                                   {{$texts[$i+2]->text}}
                               @endif
                           </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-flat">
                                    <input type="checkbox" name="checkbox[{{$i+1}}]"
                                           @if(isset($checkbox[$i+1]))
                                           @if(!is_null($checkbox[$i+1]->value))
                                           checked
                                            @endif
                                            @endif
                                    >
                                    <div style="display: inline-block;" class="panel-heading">

                                    </div>
                                    <div style="display: inline-block;" class="navbar-right">

                                    </div>
                                    <div class="row">
                                        <div class="panel-body">
                                            <div class="col-md-12">
                           <textarea name="editor{{$i+1}}" id="editor{{$i+1}}">
                                @if(isset($texts[$i+3]))
                                   {{$texts[$i+3]->text}}
                               @endif
                           </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endfor
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-flat">
                                <h2>Сравнительный анализ с конкурентами</h2>
                            </div>
                        </div>
                    </div>
                    @for($i=76;$i<84;$i=$i+2)
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-flat">
                                    <div class="container-fluid">
                                        <div class="form-group mar_input">
                                            <div class="col-md-6">
                                                <input type="text" name="main_name[{{$i}}]"
                                                       @if(isset($main_name[$i/2]))
                                                       value="{{$main_name[$i/2]->value}}"
                                                       @endif
                                                       class="form-control" id="name_search" placeholder="">
                                            </div>
                                        </div>
                                        <div class="mar_checkbox">
                                            {!!  Html::image('images/1-1.png','pic',array('height'=>'30px', 'width'=>'30px'))  !!}
                                            <input type="checkbox" name="checkbox{{$i}}[1]"
                                                   @if(isset($icon_checkbox[$i/2]))
                                                   @if($icon_checkbox[$i/2]->value == 1)
                                                   checked
                                                    @endif
                                                    @endif
                                            >
                                            {!!  Html::image('images/2-1.png','pic',array('height'=>'30px', 'width'=>'30px'))  !!}
                                            <input type="checkbox" name="checkbox{{$i}}[2]"
                                                   @if(isset($icon_checkbox[$i/2]))
                                                   @if($icon_checkbox[$i/2]->value == 2)
                                                   checked
                                                    @endif
                                                    @endif
                                            >
                                            {!!  Html::image('images/3-1.png','pic',array('height'=>'30px', 'width'=>'30px'))  !!}
                                            <input type="checkbox" name="checkbox{{$i}}[3]"
                                                   @if(isset($icon_checkbox[$i/2]))
                                                   @if($icon_checkbox[$i/2]->value == 3)
                                                   checked
                                                    @endif
                                                    @endif
                                            >
                                            {!!  Html::image('images/4-1.png','pic',array('height'=>'30px', 'width'=>'30px'))  !!}
                                            <input type="checkbox" name="checkbox{{$i}}[4]"
                                                   @if(isset($icon_checkbox[$i/2]))
                                                   @if($icon_checkbox[$i/2]->value == 4)
                                                   checked
                                                    @endif
                                                    @endif
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-flat">
                                    <input type="checkbox" name="checkbox[{{$i}}]"
                                           @if(isset($checkbox[$i]))
                                           @if(!is_null($checkbox[$i]->value))
                                           checked
                                            @endif
                                            @endif
                                    >
                                    <div style="display: inline-block;" class="panel-heading">

                                    </div>
                                    <div style="display: inline-block;" class="navbar-right">

                                    </div>
                                    <div class="row">
                                        <div class="panel-body">
                                            <div class="col-md-12">
                           <textarea name="editor{{$i}}" id="editor{{$i}}">
                                 @if(isset($texts[$i+2]))
                                   {{$texts[$i+2]->text}}
                               @endif
                           </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-flat">
                                    <input type="checkbox" name="checkbox[{{$i+1}}]"
                                           @if(isset($checkbox[$i+1]))
                                           @if(!is_null($checkbox[$i+1]->value))
                                           checked
                                            @endif
                                            @endif
                                    >
                                    <div style="display: inline-block;" class="panel-heading">

                                    </div>
                                    <div style="display: inline-block;" class="navbar-right">

                                    </div>
                                    <div class="row">
                                        <div class="panel-body">
                                            <div class="col-md-12">
                           <textarea name="editor{{$i+1}}" id="editor{{$i+1}}">
                                  @if(isset($texts[$i+3]))
                                   {{$texts[$i+3]->text}}
                               @endif
                           </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endfor
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-flat">
                                <div style="display: inline-block;" class="panel-heading">
                                    <h2>Вывод</h2>
                                </div>
                                <div style="display: inline-block;" class="navbar-right">

                                </div>
                                <div class="row">
                                    <div class="panel-body">
                                        <div class="col-md-12">
                           <textarea name="editor84" id="editor84">
                               @if(isset($texts[86]))
                                   {{$texts[86]->text}}
                               @endif
                           </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <input type="submit" class="fixed">Submit form </input>
                </div>
            </form>
        </div>
    </div>
    <script>
                @for($i=-2;$i<100;$i++)
        var editor = CKEDITOR.replace('editor{{$i}}');
        @endfor
    </script>
</div>
</div>
</body>
</html>
