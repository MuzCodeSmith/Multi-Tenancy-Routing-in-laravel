@extends('layouts.layout')
@section('title','Teacher Dashboard')
@section('styles')
@section('content')
<style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: Arial, sans-serif; }
        body {
            display: flex;
            height: 100vh;
        }
        .sidebar {
            width: 250px;
            background-color: #333;
            color: white;
            padding: 20px;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar ul li {
            padding: 10px;
            margin: 5px 0;
            background-color: #444;
            cursor: pointer;
        }

        .sidebar ul li a{
            color: white;
            text-decoration: none;
        }

        .sidebar ul li:hover {
            background-color: #555;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .header {
            background-color: #04AA6D;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 24px;
        }
</style>
@endsection
<x-dashboard-sidebar />
<x-dashboard-wrapper>
    <x-dashboard-header />
    <x-dashboard-body />
</x-dashboard-wrapper>
@endsection