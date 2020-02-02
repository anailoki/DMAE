@extends('principal')
@section('content')
    <template v-if= "menu==0">
        <index-component></index-component>
    </template>

    <template v-if= "menu==1">
        <our-project></our-project>
    </template>

    <template v-if= "menu==2">
        <program-componet></program-componet>

    </template>

    <template v-if= "menu==3">
        <leaders-componet></leaders-componet>
    </template>

    <template v-if= "menu==4">
        <register-componet></register-componet>
    </template>
@endsection