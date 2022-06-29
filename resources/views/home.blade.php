@extends('layouts.app')

@section('content')
<div class="container w-full mx-auto pt-20">
    <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">

        <div class="flex flex-wrap">
            <div class="w-full md:w-2/2 xl:w-3/3 p-3">
                <div class="bg-white border rounded shadow p-2">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded p-3 bg-yellow-600"><i class="fas fa-user-plus fa-2x fa-fw fa-inverse"></i></div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <span id="latest_trade_user"></span>
                            <form class="form-addrow">
                                <div class="mb-3">
                                    <input type="text" name="firstname" class="form-control">
                                    
                                </div>
                                <div class="mb-3">
    
                                    <input type="text" name="lastname" class="form-control">
                                </div>
                                <input type="submit" value="Submit" class="btn btn-outline-primary btn-addrow"/>
                            </form>
                            <table class="table" id="queryTable">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection