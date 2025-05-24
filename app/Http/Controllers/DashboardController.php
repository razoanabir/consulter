<?php

namespace App\Http\Controllers;

use App\Models\CompanyInformation;
use App\Models\LandingPage;
use App\Models\PaymentDue;
use App\Models\PotentialClient;
use App\Models\Project;
use App\Models\Team;
use App\Models\TodaysExpense;
use App\Models\TodaysMoney;
use Illuminate\Http\Request;
use Carbon\Carbon;
class DashboardController extends Controller
{
//------------------------------------veiw-dashboard-page-----------------------------------------------------------
    public function dashboard()
    {
        $dashboard_data    = LandingPage::first();
        $todaysMoney       = TodaysMoney::get();
        $todaysExpense     = TodaysExpense::get();
        $paymentDue        = PaymentDue::get();
        $teamMembers       = Team::get();
        $notifications     = auth()->user()->unreadNotifications;
        $project           = Project::get();
        $totalEarnings     = TodaysMoney::sum('amount');
        $totalExpense      = TodaysExpense::sum('amount');
        $netIncome         = $totalEarnings - $totalExpense;
        $todaysUser        = PotentialClient::whereDate('created_at', Carbon::today())->count();
        $totalUser         = CompanyInformation::where('service_status', 'engaged', true)->count();
        $todaysMoneyOnly   = TodaysMoney::whereDate('created_at', Carbon::today())->sum('amount');
        $todaysExpenseOnly = TodaysExpense::whereDate('created_at', Carbon::today())->sum('amount');

        return view('admin.dashboard',compact(
            'notifications',
            'dashboard_data',
            'todaysMoney',
            'todaysExpense',
            'paymentDue',
            'teamMembers',
            'todaysMoneyOnly',
            'todaysExpenseOnly',
            'project',
            'netIncome',
            'todaysUser',
            'totalUser',
        ));
    }
//------------------------------------add-todays-money-----------------------------------------------------------
    public function add_todays_money(Request $request)
    {
        $todaysMoney = new TodaysMoney();
        $todaysMoney->fill($request->only([
            'title',
            'amount',
            'note'
        ]));
        $todaysMoney->save();
        return back()->with('msg', 'Data Has Been Added Successfully');
    }
//------------------------------------update-todays-money-----------------------------------------------------------

    public function update_todays_money(Request $request, $id)
    {
        $todaysMoney = TodaysMoney::findOrFail($id);
        $todaysMoney->fill($request->only([
            'title',
            'amount',
            'note'
        ]));
        $todaysMoney->save();
        return back()->with('msg', 'Data Has Been Added Successfully');
    }
//--------------------------------------delete-todays-money--------------------------------------------------------
    public function delete_todays_money($id)
    {
        $todaysMoney = TodaysMoney::findOrFail($id);
        $todaysMoney->delete();

        return back()->with('msg', 'Data Has Been Added Successfully');
    }    
//------------------------------------add-todays-expense-----------------------------------------------------------
    public function add_todays_expense(Request $request)
    {
        $todaysExpense = new TodaysExpense();
        $todaysExpense->fill($request->only([
            'title',
            'amount',
            'note'
        ]));
        $todaysExpense->save();
        return back()->with('msg', 'Data Has Been Added Successfully');
    }
//------------------------------------update-todays-expense-----------------------------------------------------------

    public function update_todays_expense(Request $request, $id)
    {
        $todaysExpense = TodaysExpense::findOrFail($id);
        $todaysExpense->fill($request->only([
            'title',
            'amount',
            'note'
        ]));
        $todaysExpense->save();
        return back()->with('msg', 'Data Has Been Added Successfully');
    }
//--------------------------------------delete-todays-expense--------------------------------------------------------
    public function delete_todays_expense($id)
    {
        $todaysExpense = TodaysExpense::findOrFail($id);
        $todaysExpense->delete();

        return back()->with('msg', 'Data Has Been Added Successfully');
    }
//------------------------------------add-todays-expense-----------------------------------------------------------
    public function add_payment_due(Request $request)
    {
        $paymentDue = new PaymentDue();
        $paymentDue->fill($request->only([
            'title',
            'total_amount',
            'paid_amount',
            'note'
        ]));
        $paymentDue->save();
        return back()->with('msg', 'Data Has Been Added Successfully');
    }
//------------------------------------update-todays-expense-----------------------------------------------------------

    public function update_payment_due(Request $request, $id)
    {
        $paymentDue = PaymentDue::findOrFail($id);
        $paymentDue->fill($request->only([
            'title',
            'total_amount',
            'paid_amount',
            'note'
        ]));
        $paymentDue->save();
        return back()->with('msg', 'Data Has Been Added Successfully');
    }
//--------------------------------------delete-todays-expense--------------------------------------------------------
    public function delete_payment_due($id)
    {
        $paymentDue = PaymentDue::findOrFail($id);
        $paymentDue->delete();

        return back()->with('msg', 'Data Has Been Added Successfully');
    }  
}
