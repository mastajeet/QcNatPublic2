@extends('layout')

@section('Content')

    <table width="650" cellspacing=2 cellpadding=2 border=0 align="">
        <tr height="" class="">
            <td width="100%" colspan=2 valign=top class="">
                <table width="100%" cellspacing=2 cellpadding=2 border=0 align="">
                    <tr height="" class="">
                        <td width="30%" colspan=1 valign=top class="">
                            <a href="/{{ $niveau->categorie }}/" target=""><span class=link><img src="/img/{{ $niveau->image }}.png" border=0></span></a>
                        </td>
                        <td width="60%" colspan=1 valign=top class="">
                            @foreach($niveau->oneliner as $line)
                                {!! $line !!}
                            @endforeach



                        </td>
                    </tr>
                </table>

            </td>
        </tr>
        <tr height="" class="">
            <td width="10%" colspan=1 valign=top class="">
            </td>
            <td width="90%" colspan=1 valign=top class="">
                @foreach($niveau->contenu as $line)
                    {!! $line !!}
                @endforeach

            </td>
        </tr>
    </table>


@endsection()
