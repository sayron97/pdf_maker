<title>
    <style type="text/css">
        @page {
            header: page-header;
            footer: page-footer;
        }

        div {
            border: 1px solid black;
            padding: 1em;
        }

        .level1 {
            box-decoration-break: slice;
        }

        .level2 {
            box-decoration-break: clone;
        }

        .level3 {
            box-decoration-break: clone;
        }
        .colo {
            background-color: #00A000;
        }

    </style>
</title>
<body>
<htmlpageheader name="page-header">
    {!!  Html::image('images/4.jpg')  !!}
</htmlpageheader>

<htmlpagefooter name="page-footer">
    {!!  Html::image('images/7.jpg')  !!}
</htmlpagefooter>
{!! $editors[85] !!}
<pagebreak></pagebreak>
<h3>Оглавление</h3>
{!! $editors[86] !!}
<pagebreak></pagebreak>
<h3>Условные обозначения</h3>
{!! $editor_m_2 !!}
<pagebreak></pagebreak>
<h3>Введение</h3>
{!! $editor_m_1 !!}
<pagebreak></pagebreak>
<h2>SEO-аудит сайта</h2>
<h3>Внутренний SEO аудит</h3>
@for($i=0;$i<12;$i=$i+2)
    <h3>
        @if($icon_checkboxes[$i/2]->value == 1)
            {!! Html::image('images/1-1.png','pic',array('height'=>'30px', 'width'=>'30px')) !!}
        @endif
        @if($icon_checkboxes[$i/2]->value == 2)
            {!! Html::image('images/2-1.png','pic',array('height'=>'30px', 'width'=>'30px')) !!}
        @endif
        @if($icon_checkboxes[$i/2]->value == 3)
            {!! Html::image('images/3-1.png','pic',array('height'=>'30px', 'width'=>'30px')) !!}
        @endif
        @if($icon_checkboxes[$i/2]->value == 4)
            {!! Html::image('images/4-1.png','pic',array('height'=>'30px', 'width'=>'30px')) !!}
        @endif
        {!! $main_names[$i] !!}
    </h3>
    @if(isset($checkboxes[$i]))
        {!! $editors[$i] !!}
    @endif
    @if(isset($checkboxes[$i+1]))
        {!! $editors[$i+1] !!}
    @endif
@endfor
<h3>Внешний SEO аудит</h3>
@for($i=12;$i<24;$i=$i+2)
    <h3>
        @if($icon_checkboxes[$i/2]->value == 1)
            {!! Html::image('images/1-1.png','pic',array('height'=>'30px', 'width'=>'30px')) !!}
        @endif
        @if($icon_checkboxes[$i/2]->value == 2)
            {!! Html::image('images/2-1.png','pic',array('height'=>'30px', 'width'=>'30px')) !!}
        @endif
        @if($icon_checkboxes[$i/2]->value == 3)
            {!! Html::image('images/3-1.png','pic',array('height'=>'30px', 'width'=>'30px')) !!}
        @endif
        @if($icon_checkboxes[$i/2]->value == 4)
            {!! Html::image('images/4-1.png','pic',array('height'=>'30px', 'width'=>'30px')) !!}
        @endif
            {!! $main_names[$i] !!}
    </h3>
    @if(isset($checkboxes[$i]))
        {!! $editors[$i] !!}
    @endif
    @if(isset($checkboxes[$i+1]))
        {!! $editors[$i+1] !!}
    @endif
@endfor
<pagebreak></pagebreak>
<h2>Технический аудит</h2>
@for($i=24;$i<32;$i=$i+2)
    <h3>
        @if($icon_checkboxes[$i/2]->value == 1)
            {!! Html::image('images/1-1.png','pic',array('height'=>'30px', 'width'=>'30px')) !!}
        @endif
        @if($icon_checkboxes[$i/2]->value == 2)
            {!! Html::image('images/2-1.png','pic',array('height'=>'30px', 'width'=>'30px')) !!}
        @endif
        @if($icon_checkboxes[$i/2]->value == 3)
            {!! Html::image('images/3-1.png','pic',array('height'=>'30px', 'width'=>'30px')) !!}
        @endif
        @if($icon_checkboxes[$i/2]->value == 4)
            {!! Html::image('images/4-1.png','pic',array('height'=>'30px', 'width'=>'30px')) !!}
        @endif
            {!! $main_names[$i] !!}
    </h3>
    @if(isset($checkboxes[$i]))
        {!! $editors[$i] !!}
    @endif
    @if(isset($checkboxes[$i+1]))
        {!! $editors[$i+1] !!}
    @endif
@endfor
<h3>Анализ технического состояния сайта</h3>
@for($i=32;$i<64;$i=$i+2)
    <h3>
        @if($icon_checkboxes[$i/2]->value == 1)
            {!! Html::image('images/1-1.png','pic',array('height'=>'30px', 'width'=>'30px')) !!}
        @endif
        @if($icon_checkboxes[$i/2]->value == 2)
            {!! Html::image('images/2-1.png','pic',array('height'=>'30px', 'width'=>'30px')) !!}
        @endif
        @if($icon_checkboxes[$i/2]->value == 3)
            {!! Html::image('images/3-1.png','pic',array('height'=>'30px', 'width'=>'30px')) !!}
        @endif
        @if($icon_checkboxes[$i/2]->value == 4)
            {!! Html::image('images/4-1.png','pic',array('height'=>'30px', 'width'=>'30px')) !!}
        @endif
            {!! $main_names[$i] !!}
    </h3>
    @if(isset($checkboxes[$i]))
        {!! $editors[$i] !!}
    @endif
    @if(isset($checkboxes[$i+1]))
        {!! $editors[$i+1] !!}
    @endif
@endfor
<pagebreak></pagebreak>
<h2>Юзабилити-аудит</h2>
@for($i=64;$i<76;$i=$i+2)
    <h3>
        @if($icon_checkboxes[$i/2]->value == 1)
            {!! Html::image('images/1-1.png','pic',array('height'=>'30px', 'width'=>'30px')) !!}
        @endif
        @if($icon_checkboxes[$i/2]->value == 2)
            {!! Html::image('images/2-1.png','pic',array('height'=>'30px', 'width'=>'30px')) !!}
        @endif
        @if($icon_checkboxes[$i/2]->value == 3)
            {!! Html::image('images/3-1.png','pic',array('height'=>'30px', 'width'=>'30px')) !!}
        @endif
        @if($icon_checkboxes[$i/2]->value == 4)
            {!! Html::image('images/4-1.png','pic',array('height'=>'30px', 'width'=>'30px')) !!}
        @endif
            {!! $main_names[$i] !!}
    </h3>
    @if(isset($checkboxes[$i]))
        {!! $editors[$i] !!}
    @endif
    @if(isset($checkboxes[$i+1]))
        {!! $editors[$i+1] !!}
    @endif
@endfor
<pagebreak></pagebreak>
<h2>Сравнительный анализ с конкурентами</h2>
@for($i=76;$i<84;$i=$i+2)
    <h3>
        @if($icon_checkboxes[$i/2]->value == 1)
            {!! Html::image('images/1-1.png','pic',array('height'=>'30px', 'width'=>'30px')) !!}
        @endif
        @if($icon_checkboxes[$i/2]->value == 2)
            {!! Html::image('images/2-1.png','pic',array('height'=>'30px', 'width'=>'30px')) !!}
        @endif
        @if($icon_checkboxes[$i/2]->value == 3)
            {!! Html::image('images/3-1.png','pic',array('height'=>'30px', 'width'=>'30px')) !!}
        @endif
        @if($icon_checkboxes[$i/2]->value == 4)
            {!! Html::image('images/4-1.png','pic',array('height'=>'30px', 'width'=>'30px')) !!}
        @endif
            {!! $main_names[$i] !!}
    </h3>
    @if(isset($checkboxes[$i]))
        {!! $editors[$i] !!}
    @endif
    @if(isset($checkboxes[$i+1]))
        {!! $editors[$i+1] !!}
    @endif
@endfor
<pagebreak></pagebreak>
<h2>Вывод</h2>
{!! $editors[84] !!}
</body>

