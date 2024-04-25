@extends('templates.layout')

@section('content')
    <div class="card mt-4">
        <div class="card-header">
            {{ $data['Title'] }}
        </div>
        <div class="card-body">
            <p> NPM = {{ $data['NPM'] }}, termasuk bilangan
                @if ($data['NPM'] % 2 === 0)
                    <span class="text-primary">GENAP</span>
                @else
                    <span class="text-primary">GANJIL</span>
                @endif
            </p>

            {{-- <div class="skills">
                <h4 class="text-uppercase">Skill:</h4>
                <div class="d-flex flex-row justify-content-between">
                    <p class="text-dark">PHP</p>
                    <div>
                        @for ($i = 0; $i < 5; $i++)
                            <span class="me-1 text-warning">
                                <i class="bi bi-star-fill"></i>
                            </span>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-between">
                <p class="text-dark">JAVA</p>
                <div>
                    @for ($i = 0; $i < 5; $i++)
                        <span class="me-1 text-warning">
                            <i class="bi bi-star{{ $i > 2 ? '-fill' : '' }}"></i>
                        </span>
                    @endfor
                </div>
            </div> --}}

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">NPM</th>
                        <th scope="col">Nama</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['students'] as $index => $value)
                        <tr>
                            <th>{{ $index + 1 }} </th>
                            <td>{{ $value['NPM'] }} </td>
                            <td>{{ $value['name'] }} </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
