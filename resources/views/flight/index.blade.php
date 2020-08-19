@extends('layouts.admin')

@section('content')
<section id="main-content" style="background: #f4f7f6">
    <section class="wrapper">
        <div class="block-header">
            <h3>Flight information</h3>
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
                                                @foreach ($users as $user)
                                                <tr>
                                                        <td>{{$i++}}</td>
                                                        <td>{{ $user->fname.' '.$user->lname }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td>{{ $user->phone }}</td>
                                                        <td>{{ $user->telephone }}</td>
                                                        <td>{{ $user->dob }}</td>
                                                        <td>{{ $user->id_no }}</td>
                                                        <td>
                                                            @if ($user->gender==1)
                                                            Male
                                                             @elseif($user->gender==0)
                                                            Female
                                                            @endif
                                                        </td>
                                                        <td>{{ $user->Occupation }}</td>
                                                        <td>{{ $user->postal_addr }}</td>
                                                        <td>{{ $user->postal_code }}</td>
                                                        <td>{{ $user->created_at }}</td>
                                                    

                                                <td>
                                                <a href="{{ url('accesor/'.$user->id.'/edit') }}">
                                                        <i class="far fa-edit" title="Edit"></i>
                                                    </a>

                                                    <a class="remove" href="javascript:void(0)" title="Remove"
                                                    onclick="var result=confirm('Are you sure you wish to delete this Route');
                                                    if(result){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form').submit();
                                                    }
                                                    ">
                                                        <i class="far fa-trash-alt"></i>
                                                        <form id="delete-form" action="{{route('accesor.destroy',[$user->id])}}" method="POST" style="display:none">
                                                            <input type="hidden" name="_method" value="delete">
                                                            {{ csrf_field() }}
                                                        </form>

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
