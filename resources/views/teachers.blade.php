@extends('inc.layout')



@section('content')
<main class="main">
    <div class="bio">
       
        <div class="bio__container seven__cards">
           
            @foreach ($teachers as $teacher)
            <div class="seven__card">
                <div class="seven__foto">
                    <img src="image/user1.jpg" alt="foto">
                </div>
                <div class="seven__name">
                    {{$teacher->name}}
                </div>
                <div class="seven__description">
                {{$teacher->work}}
                </div>
              
                <p>
                {{$teacher->desc}}
                </p>
                <a href="{{route('teachers-id',$teacher->id)}}" class="seven__button">Подробнее</a>
            </div>
            @endforeach 
              
        </div>
        {{$teachers->links()}}  
    </div>
</main>
@endsection