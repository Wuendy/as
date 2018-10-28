
@extends('layouts.header')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('/css/css/stylestable.css')}}" media="all" />
<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Inicio</a>
        </li>
        <li class="breadcrumb-item active">LISTADO DE PROFESORES</li>
    </ol>
            
            

            <table style="text-align:Justify;width:100%;">
             <tr>
             
           		<th class="c6">Identificacion</th>
               <th class="c1">Nombre &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
               <th class="c2">Apellido &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
               <th class="c3">Cedula &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
               <th class="c4">Tlf&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
               <th class="c5">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
               <th class="c5">Profesor de:</th>


               
             </tr>
             <tbody>
              @if($profesor->count())  
              @foreach($profesor as $profesor)  
              <tr>
             
              	<td class="c6">{{$profesor->id}}</td>
                <td class="c1">{{$profesor->nombre}}</td>
                <td class="c2">{{$profesor->apellido}}</td>
                <td class="c3">{{$profesor->cedula}}</td>
                <td class="c4">{{$profesor->tlf}}</td>
                <td class="c5">{{$profesor->email}}</td>
                <td class="c5">{{$profesor->materias->materia}}</td>
               
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!<a href="{{ route('profesor.create') }}" ><img src="{{ asset('css/images/plus.svg')}}" style="height:30px;width:30px;"></a> </td>
              </tr>
              @endif
            </tbody>
 
          </table>
        

 </body>
 </html>
@endsection