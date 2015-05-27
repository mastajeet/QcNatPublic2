@extends('layout')


@section('Content')
    <table width="50%" cellspacing=2 cellpadding=2 border=0 align="">
@foreach($raisons as $raison)


        <tr height="" class="">
            <td width="10%" colspan=1 valign=top class="">
            </td>
            <td width="90%" colspan=1 valign=top class="">
                <p><span class=SousTitre>Raison numéro {{$raison->numero}}:  {{$raison->titre}}</span></p>
                <p><span class=Texte>{{$raison->texte}}<span></p>
            </td>
        </tr>
        <tr height="" class="">
            <td width="40%" colspan=2 valign=top class="">
                <img src="/img/dottedline.png" >
            </td>
        </tr>






@endforeach

    </table>

@endsection
