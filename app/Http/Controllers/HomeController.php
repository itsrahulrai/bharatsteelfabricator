<?php
namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('category')->latest()->take(4)->get();
        return view('frontend.index', compact('blogs'));
    }

    public function pages($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        return view('frontend.pages', compact('page'));
    }

    public function Gallery()
    {
        $galleries = Gallery::latest()->get();
        return view('frontend.gallery', compact('galleries'));
    }

    public function blogs()
    {
        $blogs = Blog::with('category')->latest()->paginate(9);
        return view('frontend.blog', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Blog::with('category')->where('slug', $slug)->firstOrFail();
        $recentBlogs = Blog::latest()->take(3)->get();
        $categories = Category::withCount('blogs')->get();

        return view('frontend.blogs-details', compact('blog', 'recentBlogs', 'categories'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $blogs = Blog::with('category')
            ->where('category_id', $category->id)
            ->latest()
            ->paginate(6);
        $categories = Category::withCount('blogs')->get();
        return view('frontend.blog', compact('blogs', 'categories', 'category'));
    }

    public function contactSubmit(Request $request)
    {
        $request->validate([
            'name' => ['required', 'regex:/^[A-Za-z ]+$/', 'max:255'],
            'phone' => ['required', 'digits:10'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:2000'],
        ], [
            'name.regex' => 'Name should contain only letters',
        ]);

        $data = [
            'name' => strip_tags($request->name),
            'mobile' => strip_tags($request->phone),
            'email' => strip_tags($request->email),
            'message' => strip_tags($request->message),
        ];

        $html = '
        <div style="font-family:Arial;background:#f4f8f8;padding:20px">
            <div style="max-width:600px;margin:auto;background:#ffffff;border-radius:10px;overflow:hidden;border:1px solid #e5e5e5">

                <div style="background:#0C6161;color:#ffffff;padding:18px;text-align:center">
                    <h2 style="margin:0;font-weight:600">Contact Enquiry</h2>
                </div>

                <div style="padding:25px">

                    <p style="margin-bottom:20px;font-size:14px;color:#333">
                        You have received a new enquiry from website.
                    </p>

                    <table width="100%" cellpadding="10" cellspacing="0"
                        style="border-collapse:collapse;font-size:14px;border:1px solid #eee">

                        <tr style="background:#e8f3f3">
                            <td width="35%"><b>Name</b></td>
                            <td>' . $data['name'] . '</td>
                        </tr>

                        <tr>
                            <td><b>Mobile</b></td>
                            <td>' . $data['mobile'] . '</td>
                        </tr>

                        <tr style="background:#e8f3f3">
                            <td><b>Email</b></td>
                            <td>' . $data['email'] . '</td>
                        </tr>

                        <tr>
                            <td><b>Message</b></td>
                            <td>' . $data['message'] . '</td>
                        </tr>

                    </table>

                </div>

                <div style="background:#0C6161;color:#fff;padding:12px;text-align:center;font-size:12px">
                    © ' . date('Y') . ' Dr Sanjeev Kalra. All rights reserved.
                </div>

            </div>
        </div>';

        // send mail
        Mail::send([], [], function ($mail) use ($data, $html)
        {

            $mail->to('drsanjeevkalra11@icloud.com')
                ->subject('New Contact Enquiry - ' . $data['name'])
                ->from('drsanjeevkalra11@icloud.com', 'Dr Sanjeev Kalra')
                ->html($html);
        });

        return redirect()->route('thankyou');
    }

    public function appointmentSubmit(Request $request)
    {

        $request->validate([

            'name' => 'required|regex:/^[A-Za-z ]+$/',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'date_time' => 'required',
            'service' => 'required',

        ]);

        $data = [

            'name' => strip_tags($request->name),
            'email' => strip_tags($request->email),
            'phone' => strip_tags($request->phone),
            'date_time' => strip_tags($request->date_time),
            'service' => strip_tags($request->service),

        ];

        $html = '

                <div style="font-family:Arial;background:#f4f8f8;padding:20px">

                <div style="max-width:600px;margin:auto;background:#ffffff;border-radius:10px;overflow:hidden;border:1px solid #e5e5e5">


                <!-- header -->
                <div style="background:#0C6161;color:#ffffff;padding:18px;text-align:center">

                <h2 style="margin:0;font-weight:600">
                New Appointment Booking
                </h2>

                </div>



                <!-- content -->
                <div style="padding:25px">

                <p style="margin-bottom:20px;font-size:14px;color:#333">

                You have received a new appointment request from website.

                </p>



                <table width="100%"
                cellpadding="10"
                cellspacing="0"

                style="
                border-collapse:collapse;
                font-size:14px;
                border:1px solid #eee;
                ">


                <tr style="background:#e8f3f3">

                <td width="35%">
                <b>Patient Name</b>
                </td>

                <td>
                ' . $data['name'] . '
                </td>

                </tr>



                <tr>

                <td>
                <b>Email</b>
                </td>

                <td>
                ' . $data['email'] . '
                </td>

                </tr>



                <tr style="background:#e8f3f3">

                <td>
                <b>Mobile</b>
                </td>

                <td>
                ' . $data['phone'] . '
                </td>

                </tr>



                <tr>

                <td>
                <b>Appointment Date</b>
                </td>

                <td>
                ' . $data['date_time'] . '
                </td>

                </tr>



                <tr style="background:#e8f3f3">

                <td>
                <b>Service</b>
                </td>

                <td>
                ' . $data['service'] . '
                </td>

                </tr>



                </table>



                <p style="
                margin-top:20px;
                font-size:13px;
                color:#666">

                This appointment request was submitted from website form.

                </p>

                </div>



                <!-- footer -->
                <div style="
                background:#0C6161;
                color:#fff;
                padding:12px;
                text-align:center;
                font-size:12px">

                © ' . date('Y') . ' Dr Sanjeev Kalra.
                All rights reserved.

                </div>



                </div>

                </div>

                ';

        Mail::send([], [], function ($mail) use ($html, $data)
        {

            $mail->to("drsanjeevkalra11@icloud.com")
                ->subject("New Appointment - " . $data['name'])
                ->from("drsanjeevkalra11@icloud.com", "Appointment")
                ->html($html);

        });

        return redirect()->route('thankyou');

    }

}
