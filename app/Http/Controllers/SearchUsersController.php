<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchUsersController extends Controller
{

    public function search(Request $request)
    {
        if ($request->ajax()) {
            if ($request->search != "") { //if search query is not empty string, fire the search.
                $output = '';
                $users = DB::table('users')
                    ->where('name', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('email', 'LIKE', '%' . $request->search . '%')
                    ->get();

                $total_row = $users->count();
                if ($total_row == 0) {
                    $output = 'No Users found<br><br><a href="/users" class=" w3-blue-grey w3-button">View All Users</a>';
                } else {
                    foreach ($users as $user) {
                        $user->link = str_replace(' ', '_', $user->name);
                        $output .= '<br><a target="_blank" href="/users/' . $user->link . '" class="w3-row-padding w3-content"
                        style="solid 2px green">
                        <div class="w3-button w3-center w3-white w3-padding w3-col s12 ">
                            <div class="w3-mobile w3-col l3 m4 s12" style="solid 2px red">
                            <img class="w3-image" src="https://www.w3schools.com/w3images/avatar2.png" style="height:80px; width:120px;solid 2px red">
                            </div>
                            <div class="w3-mobile w3-col l9 m6 s12" style="margin-top:0px; solid 2px red;">
                            <h5><b>' . $user->name . '</b><h5>
                            <h5>' . $user->id . '<h5>
                            </div>
                        </div>

                      </a>';
                    }
                }



                return Response($output);
            }


        }
    }
}
