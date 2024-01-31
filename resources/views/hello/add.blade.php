@extends('layouts.helloapp')

@section('title', 'Add')

@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')
    <form action="/hello/add" method="post">
        <table>
            @csrf
            <tr>
                <th>name: </th><td><input type="text" name="name"></td>
                <th>mail: </th><td><input type="text" name="mail"></td>
                <th>age: </th><td><input type="text" name="age"></td>
                <th></th><td><input type="submit" value="send"></td>
            </tr>
        </table>
    </form>
@endsection

@section('footer')
copyright 2020 tuyano.  
@endsection