@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
  
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <table>
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>company</th>
                                <th>address</th>
                                <th>facility_id</th>
                                <th>facility_name</th>
                                <th>rating</th>
                                <th>count</th>
                                <th>content</th>
                            </tr>
                        </thead>
                        <>
                        @foreach ($merged1 as $item)
                        <>
                            <td>{{ $item['id'] }}</td>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['facility_count'] }}</td>
                            {{-- <td>{{ $item['cooperate_name'] }}</td>
                            <td>{{ $item['address'] }}</td> --}}
                            {{-- <td>{{ implode(', ', $item['facility_id']) }}</td>
                            <td>{{ implode(', ', $item['facility_name']) }}</td>
                            <td>{{ $item['review_rating'] }}</td>
                            <td>{{ $item['review_count'] }}</td>
                            <td>{{ $item['content'] }}</td> --}}
                            {{-- <td>{{ $item->review_rating }}</td>
                            <td>{{ $item->review_count }}</td> --}}
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{-- {{ $merged->links() }} --}}
                    You are Logged In
                </div>
            </div>
        </div>
    </div>
</div>
@endsection