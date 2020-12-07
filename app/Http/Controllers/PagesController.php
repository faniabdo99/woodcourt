<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // public function test(){
    //     $content = file_get_contents('teams.json');
    //     $arrContent = json_decode($content);
    //     // dd($arrContent->page);
    //     foreach ($arrContent->page as $thekey => $single) {
    //       // dd($single);
    //       $TheCodeArray = [];
    //       $TheItem = '
    //       <div class="col-lg-4">
    //           <div class="single-team-item">
    //               <h2 class="defaultcolor mb-3 team-name" >'.$single->team_name.' <br><small class="team-nation">'.$single->team_namtion.'</small></h2>
    //               <p class="team-description">'.$single->description.'</p>
    //               <b class="d-block mb-1">Team Leader:</b>
    //               <ul class="single-team-item-members">
    //                 <li><img class="team-leader-image" src="images/teams/'.strtolower(str_replace(' ','_',$single->team_name)).'/'.strtolower(str_replace(' ','_',$single->team_leader)).'.jpg"> <p class="team-leader-name">'.$single->team_leader.' <b class="team-member-nation">'.strtoupper(substr(str_replace(' ','',$single->leader_nation),0,2)).'</b></p></li>
    //               </ul>
    //               <b class="d-block mb-1">Team Members:</b>
    //               <ul class="single-team-item-members">';
    //                         $Members = explode(',',$single->team_members);
    //                         $Countries = explode(',',$single->members_natio);
    //                         foreach ($Members as $key => $Member) {
    //                           $TheItem = $TheItem.'<li><img class="team-member-image" src="images/teams/'.strtolower(str_replace(' ','_',$single->team_name)).'/'.strtolower(str_replace(' ','_',$Member)).'.jpg"> <p class="team-member-name">'.$Member.' <b class="team-member-nation">'.strtoupper(substr(str_replace(' ','',@$Countries[$key]),0,2)).'</b></p></li>';
    //                         }
    //                         $TheItem = $TheItem.'</ul></div></div>';
    //                         echo $TheItem;
    //     }
    //
    // }
    public function getSoonPage()
    {
        return view('soon');
    }
    public function getHome()
    {
        return view('index');
    }
    public function getAboutUs()
    {
        return view('about-us');
    }
    public function getOurFactory()
    {
        return view('factory');
    }
    public function getProductsPage()
    {
        return view('products');
    }
}
