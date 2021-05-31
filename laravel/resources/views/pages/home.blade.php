@extends('layouts.main-layout')

@section('title')
    <title>
        Homepage
    </title>
@endsection

@section('main')
    <main>
        <section id="employees">
            <div class="container">
                <h1>
                    Employees:
                </h1>
    
                <ul id="employees-list">
                    @foreach ($employees as $employee)
                        <li>
                            <ul class="employee">
                                <li>
                                   <strong>Name: </strong> 
                                    {{ $employee -> firstname }}
                                </li>
                                <li>
                                    <strong>Lastname: </strong>
                                    {{ $employee -> lastname }}
                                </li>
                                <li>
                                    <strong>Ral: </strong>
                                    {{ $employee -> ral }}
                                </li>
                                @foreach ($employee -> task as $task)
                                    <li>
                                        <strong>
                                            Task title:
                                        </strong> {{ $task -> title }}
                                    </li>
                                    <li>
                                       <strong>
                                           Task description:
                                       </strong>
                                        {{ $task -> description }}
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    </main>
@endsection