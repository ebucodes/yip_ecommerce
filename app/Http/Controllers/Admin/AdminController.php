<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Category;
use App\Models\Order;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        $pageTitle = 'Admin Dashboard';
        $customers = User::where('role', 'buyer')->count();
        $vendors = User::where('role', 'seller')->count();
        $orders = Order::where('status', 'paid')->count();
        $totalPrice = Order::where('status', 'paid')
            ->sum(DB::raw('price * quantity'));
        return view('admin.dashboard', compact('pageTitle', 'customers', 'vendors', 'orders', 'totalPrice'));
    }

    //
    public function allLogs()
    {
        $pageTitle = "All Logs";
        $collection = Activity::orderBy('created_at', 'DESC')->get();
        return view('admin.all-logs', compact('pageTitle', 'collection'));
    }

    //
    public function categoryIndex()
    {
        $pageTitle = 'Category';
        $collection = Category::orderBy('created_at', 'DESC')->get();
        return view('admin.category', compact('pageTitle', 'collection'));
    }

    //
    public function categoryStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'bail|required',
            'desc' => 'bail|required',
        ]);

        if ($validated) {
            $create = new Category();
            $create->name = $request->name;
            $create->desc = $request->desc;
            $create->status = 'active';
            $create->save();
            // log activity
            $logMessage = auth()->user()->email . " created a new category named: {$request->name}";
            logAction(auth()->user()->email, 'Created a Category', $logMessage, $request->ip(), $request->userAgent());
            //
            return redirect()->back()->with('success', "Created successfully");
        } else {
            // If there are validation errors, you can return to the form with the errors
            return back()->withErrors($validated);
        }
    }

    //
    public function categoryUpdate(Request $request)
    {
        $id = $request->id;

        $validated = $request->validate([
            'name' => 'bail|required',
            'desc' => 'bail|required',
        ]);

        if ($validated) {
            $category = Category::find($id);
            $category->update(['name' => $request->name, 'desc' => $request->desc, 'status' => $request->status]);
            // log activity
            $logMessage = auth()->user()->email . " updated a category";
            logAction(auth()->user()->email, 'Updated a Category', $logMessage, $request->ip(), $request->userAgent());
            //
            return redirect()->back()->with('success', "Updated successfully");
        } else {
            // If there are validation errors, you can return to the form with the errors
            return back()->withErrors($validated);
        }
    }

    //
    public function categoryDelete(Request $request)
    {
        $id = $request->id;
        $category = Category::find($id);
        $category->delete();
        // log activity
        $logMessage = auth()->user()->email . " deleted a category";
        logAction(auth()->user()->email, 'Deleted a Category', $logMessage, $request->ip(), $request->userAgent());
        //
        return redirect()->back()->with('success', "Deleted successfully");
    }

    //
    public function subCategoryIndex()
    {
        $pageTitle = 'Sub Category';
        $collection = SubCategory::orderBy('created_at', 'DESC')->get();
        $subCategoriesFormatted = [];
        $categories = Category::get();
        return view('admin.sub-category', compact('pageTitle', 'collection', 'categories'));
    }

    //
    public function subCategoryStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'bail|required',
            'desc' => 'bail|required',
            'category' => 'bail|required'
        ]);

        if ($validated) {
            $create = new SubCategory();
            $create->name = $request->name;
            $create->desc = $request->desc;
            $create->category = json_encode($request->category);
            $create->status = 'active';
            $create->save();
            // log activity
            $logMessage = auth()->user()->email . " created a new sub-category named: {$request->name}";
            logAction(auth()->user()->email, 'Created a Sub-Category', $logMessage, $request->ip(), $request->userAgent());
            //
            return redirect()->back()->with('success', "Created successfully");
        } else {
            // If there are validation errors, you can return to the form with the errors
            return back()->withErrors($validated);
        }
        return view('admin.dashboard', compact('pageTitle'));
    }

    //
    public function subCategoryUpdate(Request $request)
    {
        $id = $request->id;

        $validated = $request->validate([
            'name' => 'bail|required',
            'desc' => 'bail|required',
            'category' => 'bail|required'
        ]);

        if ($validated) {
            $category = SubCategory::find($id);
            $category->update(['name' => $request->name, 'desc' => $request->desc, 'category' => json_encode($request->category), 'status' => $request->status]);
            // log activity
            $logMessage = auth()->user()->email . " updated a sub-category";
            logAction(auth()->user()->email, 'Updated a Sub-Category', $logMessage, $request->ip(), $request->userAgent());
            //
            return redirect()->back()->with('success', "Updated successfully");
        } else {
            // If there are validation errors, you can return to the form with the errors
            return back()->withErrors($validated);
        }
    }

    //
    public function subCategoryDelete(Request $request)
    {
        $id = $request->id;
        $category = SubCategory::find($id);
        $category->delete();
        // log activity
        $logMessage = auth()->user()->email . " deleted a sub-category";
        logAction(auth()->user()->email, 'Deleted a Sub-Category', $logMessage, $request->ip(), $request->userAgent());
        //
        return redirect()->back()->with('success', "Deleted successfully");
    }

    //
    public function adminIndex()
    {
        $pageTitle = 'Admin';
        $collection = User::where('role', 'admin')->orderBy('created_at', 'DESC')->get();
        return view('admin.admin', compact('pageTitle', 'collection'));
    }

    //
    public function adminStore(Request $request)
    {
        $validated = $request->validate([
            'firstName' => 'bail|required',
            'lastName' => 'bail|required',
            'email' => 'bail|required|email',
            'phone' => 'bail|required|numeric',
            'password' => 'bail|required|string',
        ]);

        if ($validated) {
            $create = new User();
            $create->firstName = $request->firstName;
            $create->lastName = $request->lastName;
            $create->email = $request->email;
            $create->phone = $request->phone;
            $create->password = Hash::make($request->password);
            $create->role = 'admin';
            $create->save();
            // log activity
            $logMessage = auth()->user()->email . " created a new admin";
            logAction(auth()->user()->email, 'Created a Admin', $logMessage, $request->ip(), $request->userAgent());
            //
            return redirect()->back()->with('success', "Created successfully");
        } else {
            // If there are validation errors, you can return to the form with the errors
            return back()->withErrors($validated);
        }
    }

    //
    public function adminUpdate(Request $request)
    {
        $id = $request->id;
        $validated = $request->validate([
            'firstName' => 'bail|required',
            'lastName' => 'bail|required',
            'phone' => 'bail|required|numeric'
        ]);

        if ($validated) {
            $admin = User::find($id);
            $admin->update(['firstName' => $request->firstName, 'lastName' => $request->lastName, 'phone' => $request->phone]);
            // log activity
            $logMessage = auth()->user()->email . " updated an admin";
            logAction(auth()->user()->email, 'Updated an Admin', $logMessage, $request->ip(), $request->userAgent());
            //
            return redirect()->back()->with('success', "Updated successfully");
        } else {
            // If there are validation errors, you can return to the form with the errors
            return back()->withErrors($validated);
        }
    }

    //
    public function adminDelete(Request $request)
    {
        $id = $request->id;
        $admin = User::find($id);
        $admin->delete();
        // log activity
        $logMessage = auth()->user()->email . " deleted an admin";
        logAction(auth()->user()->email, 'Deleted an Admin', $logMessage, $request->ip(), $request->userAgent());
        //
        return redirect()->back()->with('success', "Deleted successfully");
    }
}