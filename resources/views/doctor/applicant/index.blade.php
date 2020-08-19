@extends('layouts.admin')
@section('content')
<section id="main-content" style="background: #f4f7f6">
    <section class="wrapper">
        <div class="block-header">
            <h3>Applicants</h3>
                <div class="col-12">
                    <div class="list-display-box">
                                        <table id="dt-page" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th class="th-sm">No:</th>
                                                    <th class="th-sm">Full Name </th>
                                                    <th class="th-sm">Email </th>
                                                    <th class="th-sm">Phone </th>
                                                    <th class="th-sm">Telephone </th>
                                                    <th class="th-sm">Birthday </th>
                                                    <th class="th-sm">Id/passport number </th>
                                                    <th class="th-sm">Gender </th>
                                                    <th class="th-sm">Occupation </th>
                                                    <th class="th-sm">Postal Address </th>
                                                    <th class="th-sm">Postal code</th>
                                                    <th class="th-sm">Created at </th>
                                                    <th class="th-sm">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users->applicants as $user)
                                                <tr>
                                                        <td>{{$i++}}</td>
                                                        <td>{{ $user->user->fname.' '.$user->user->lname }}</td>
                                                        <td>{{ $user->user->email }}</td>
                                                        <td>{{ $user->user->phone }}</td>
                                                        <td>{{ $user->user->telephone }}</td>
                                                        <td>{{ $user->user->dob }}</td>
                                                        <td>{{ $user->user->id_no }}</td>
                                                        <td>
                                                            @if ($user->user->gender==1)
                                                            Male
                                                             @elseif($user->user->gender==0)
                                                            Female
                                                            @endif
                                                        </td>
                                                        <td>{{ $user->user->Occupation }}</td>
                                                        <td>{{ $user->user->postal_addr }}</td>
                                                        <td>{{ $user->user->postal_code }}</td>
                                                        <td>{{ $user->user->created_at }}</td>
                                                    

                                                <td>
                                                <a href="{{ url('applicants/'.$user->id) }}">
                                                      
                                                        <i class="fas fa-eye" title="Show"></i>
                                                    </a>

                                                    </td>
                                                </tr>

                                                    @endforeach
                                            </tbody>

                                        </table>
                    </div>
                </div>
        </div>
    </section>
</section>

<script>
    function visibility(ids,name){
        event.preventDefault();
       
        id='#'+ids;
        if($(id).children().hasClass('fa-eye')){
           var action = 'visible';
        }else {
            var action = 'hidden';
        }
        var status ='#status-'+ids;
       

        var result=confirm('Are you sure you want to ' + name+' '+ action );
        if(result){
            var token = '{{ Session::token() }}';
            var url = '{{ url('/visibility') }}';

            $.ajax({
                    method:'POST',
                    url:url,
                    data:{category:ids,_token: token,action:action},
                    success:
                    function(result){
                        $(status).empty();
                        var actions =$(id).children();
                        if(result['success']=='hide'){
                           actions.removeClass('fa-eye-slash');
                           actions.addClass('fa-eye');
                           $(status).text('hidden');
                        }else if(result['success']=='visible'){
                           actions.removeClass('fa-eye');
                           actions.addClass('fa-eye-slash');
                           $(status).text('visible');
                        }                     
                    }
            });

        }
    }

</script>
@endsection
