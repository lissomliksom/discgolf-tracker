@extends('layouts.app')

@section('content')
  <section class="section mb-6">
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-half">

              @if(count($scores) > 0)

                <table class="table is-striped is-hoverable is-fullwidth">
                    <thead>
                        <tr>
                            <th>Spiller</th>
                            <th>Dato</th>
                            <th class="has-text-centered">Score</th>
                        </tr>
                    </thead>
                    <tbody>

                      @foreach ($scores as $score)
                        <tr>
                            <td>{{$score->name}}</td>
                            <td><small class="has-text-grey is-size-7">{{$score->created_at}}</small></td>
                            <td class="has-text-centered">{{$score->score}}</td>
                        </tr>
                      @endforeach
              
                    </tbody>
                </table>

                @else
                  Fant ingen tilgjengelige data
                @endif

              </div>
          </div>
      </div>
  </section>
@endsection