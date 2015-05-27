@extends('layout')


@section('Content')



<?php $i=0 ?>
<table width="100%" cellspacing=2 cellpadding=2 border=0 align="">
    <tr height="" class="">
        <td width="50%" colspan=1 valign=top class="">



        @while($i<=count($cours)/2-1)


                <table width="100%" cellspacing=2 cellpadding=2 border=0 align="">
                    <tr height="" class="">
                        <td width="30%" colspan=1 valign=top class="">
                            <a href="/cours/{{$cours[$i]->image}}" target=""><span class=link><img src="/img/{{$cours[$i]->image}}.png" border=0></span></a>
                        </td>
                        <td width="60%" colspan=1 valign=top class="">

                            {!! $cours[$i]->oneliner !!}
                        </td>
                    </tr>
                </table>

                <img src="/img/dottedline.png" >

            <?php $i++ ?>
        @endwhile


        </td>
        <td width="50%" colspan=1 valign=top class="">

        @while($i<=count($cours)-1)
                <table width="100%" cellspacing=2 cellpadding=2 border=0 align="">
                    <tr height="" class="">
                        <td width="30%" colspan=1 valign=top class="">
                            <a href="/cours/{{$cours[$i]->image}}" target=""><span class=link><img src="/img/{{$cours[$i]->image}}.png" border=0></span></a>
                        </td>
                        <td width="60%" colspan=1 valign=top class="">

                            {!! $cours[$i]->oneliner !!}
                        </td>
                    </tr>
                </table>

                <img src="/img/dottedline.png" >
            <?php $i++ ?>
        @endwhile
        </td>
    </tr>
</table>
@endsection
