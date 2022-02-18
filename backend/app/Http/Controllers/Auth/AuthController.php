<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Support\Facades\DB;
use PDO;

class AuthController extends Controller
{
    /** 
     * @return View
    */
    public function showLogin()
    {
        if (session()->has('user')){
            return redirect('/home');
        }
        return view('login.login_form');
    }

    /** 
     * @param App\Http\Requests\LoginFormRequest
    */
    public function Login(LoginFormRequest $request)
    {
        $salesman_id = $request->input('v_salesman_id');
        $password = $request->input('password');

        // return json_encode(DB::select("select @@version"));

        try {
            DB::connection('sqlsrv_dev')->getPdo();
        } catch (\Exception $e) {
            die("Could not connect to the database.  Please check your configuration. error:" . $e );
        }
        $user = DB::connection('sqlsrv_dev')->table('VM_Login')
        ->where('v_salesman_id', '=', $salesman_id)
        ->where('password', '=', $password)
        ->value('employee_name');
        if($user) {
            $user_session = $request->get('v_salesman_id');
            session(['user' => $user_session]);
            return redirect('/home');
        }
        else{
            return back()->withErrors(['errors' => 'IDかパスワードが間違っています。']);
        }
    }

    /** 
     * @return View
    */
    public function Logout()
    {
        session()->forget('user');
        return redirect('/');
    }

    /** 
     * @param App\Http\Requests\InputFormRequest
    */
    public function Login(InputFormRequest $request)
    {
        // ヘッダー
        $v_quotation_no = $request->input('v_quotation_no') ;
        $v_revision_no = $request->input('v_revision_no') ;
        $v_pattern_no = $request->input('v_pattern_no') ;
        $i_approval_status = $request->input('i_approval_status') ;
        $i_commit_status = $request->input('i_commit_status') ;
        $v_project_title = $request->input('v_project_title') ;
        $v_client_id = $request->input('v_client_id') ;
        $v_client_name = $request->input('v_client_name') ;
        $v_department_name = $request->input('v_department_name') ;
        $v_salesman_id = $request->input('v_salesman_id') ;
        $v_salesman_name = $request->input('v_salesman_name') ;
        $v_service_category = $request->input('v_service_category') ;
        $d_delivery_date = $request->input('d_delivery_date') ;
        $d_submit_date = $request->input('d_submit_date') ;
        $v_memo = $request->input('v_memo') ;
        $v_company_name1 = $request->input('v_company_name1') ;
        $v_company_name2 = $request->input('v_company_name2') ;
        $v_company_name3 = $request->input('v_company_name3') ;
        //  製品情報
        $v_product_name1 = $request->input('v_product_name1') ;
        $v_product_name2 = $request->input('v_product_name2') ;
        $i_estimate_unitprice = $request->input('i_estimate_unitprice') ;
        $i_estimate_amount = $request->input('i_estimate_amount') ;
        $v_product_category = $request->input('v_product_category') ;
        $v_process_pattern = $request->input('v_process_pattern') ;
        $i_detail_no = $request->input('i_detail_no') ;
        $v_product_id = $request->input('v_product_id') ;
        $v_product_image = $request->input('v_product_image') ;
        $i_quantity = $request->input('i_quantity') ;
        $v_unit = $request->input('v_unit') ;
        $v_single_double = $request->input('v_single_double') ;
        $i_front_color = $request->input('i_front_color') ;
        $i_back_color = $request->input('i_back_color') ;
        $v_finish_size = $request->input('v_finish_size') ;
        $i_finish_size_w = $request->input('i_finish_size_w') ;
        $i_finish_size_l = $request->input('i_finish_size_l') ;
        $i_fiish_size_h = $request->input('i_finish_size_h') ;
        $v_deploy_size = $request->input('v_deploy_size') ;
        $i_deploy_size_w = $request->input('v_deploy_size_w') ;
        $i_deploy_size_l = $request->input('v_deploy_size_l') ;
        $i_deploy_size_h = $request->input('v_deploy_size_h') ;
        //  用紙情報
        $v_paper_type = $request->input('v_paper_type') ;
        $v_paper_brand = $request->input('v_paper_brand') ;
        $v_paper_size = $request->input('v_paper_size') ;
        $i_paper_ream = $request->input('i_paper_ream') ;
        $i_paper_order_unit = $request->input('i_paper_order_unit') ;
        $i_paper_price = $request->input('i_paper_price') ;
        $i_paper_sell_price = $request->input('i_paper_sell_price') ;
        $i_paper_quantity = $request->input('i_paper_quantity') ;
        $i_print_reserve_quantity = $request->input('i_print_reserve_quantity') ;
        $i_process_reserve_quantity = $request->input('i_process_reserve_quantity') ;
        $i_paper_total_quantity = $request->input('i_paper_total_quantity') ;
        $i_paper_total_amount = $request->input('i_paper_total_amount') ;
        //  印刷・加工情報
        $i_order_print = $request->input('i_order_print') ;
        $v_machine_no = $request->input('v_machine_no') ;
        $v_machine_name = $request->input('v_machine_name') ;
        $v_process_name = $request->input('v_process_name') ;
        $v_imposition_image = $request->input('v_imposition_image') ;
        $i_imposition = $request->input('i_imposition') ;
        $v_single_double_c800 = $request->input('v_single_double_c800') ;
        $i_color_c800 = $request->input('i_color_c800') ;
        $i_punch_p7100 = $request->input('i_punch_p7100') ;
        $i_stable_p7100 = $request->input('i_stable_p7100') ;
        $i_stitch_p7100 = $request->input('i_stitch_p7100') ;
        $v_color_type_p7100 = $request->input('v_color_type_p7100') ;
        $v_fold_type_p7100 = $request->input('v_fold_type_p7100') ;
        $v_size_p7100 = $request->input('v_size_p7100') ;
        $v_single_double_p7100 = $request->input('v_single_double_p7100') ;
        $v_size_s9050 = $request->input('v_size_s9050') ;
        $v_paper_type_2468 = $request->input('v_paper_type_2468 ') ;
        $v_ink_type_2468 = $request->input('v_ink_type_2468 ') ;
        $i_color_2468 = $request->input('i_color_2468') ;
        $i_color_sp_2468 = $request->input('i_color_sp_2468') ;
        $v_solid_area_2468 = $request->input('v_solid_area_2468') ;
        $v_solid_color_2468 = $request->input('v_solid_color_2468') ;
        $v_paper_type_7 = $request->input('v_paper_type_7') ;
        $v_ink_type_7 = $request->input('v_ink_type_7') ;
        $v_color_7 = $request->input('v_color_7') ;
        $v_color_sp_7 = $request->input('v_color_sp_7') ;
        $v_solid_area_7 = $request->input('v_solid_area_7') ;
        $v_solid_color_7 = $request->input('v_solid_color_7') ;
        $v_uv_type_7 = $request->input('v_uv_type_7') ;
        $v_uv_area_7 = $request->input('v_uv_area_7') ;
        $v_interdeck_7 = $request->input('v_interdeck_7') ;
        $v_size_ctp = $request->input('v_size_ctp') ;
        $v_work_name_ctp = $request->input('v_work_name_ctp') ;
        $v_size_cut1 = $request->input('v_size_cut1') ;
        $i_packag_pack = $request->input('i_packag_pack') ;
        $i_collating_pack = $request->input('i_collating_pack') ;
        $i_saddle_pack = $request->input('i_saddle_pack') ;
        $v_fold_type_line2 = $request->input('v_fold_type_line2') ;
        $v_fold_type_fold = $request->input('v_fold_type_fold') ;
        $i_fold_bind = $request->input('i_fold_bind') ;
        $i_cut_bind = $request->input('i_cut_bind') ;
        $i_paste_bind = $request->input('i_paste_bind') ;
        $i_stitch_bind = $request->input('i_stitch_bind') ;
        $i_end_bind = $request->input('i_end_bind') ;
        $i_wrap_bind = $request->input('i_wrap_bind ') ;
        $v_paper_type_bind = $request->input('v_paper_type_bind') ;
        $v_direction_bind = $request->input('v_direction_bind') ;
        $i_stripper_ext = $request->input('i_stripper_ext') ;
        $i_spmaterial_ext = $request->input('i_spmaterial_ext') ;
        $v_category_ext = $request->input('i_category_ext') ;
        $v_face_ext = $request->input('i_face_ext') ;
        $v_category_mini = $request->input('v_category_mini') ;
        $i_spmaterial_pluck = $request->input('i_spmaterial_pluck') ;
        $i_face_pluck = $request->input('i_face_pluck') ;
        $v_category_gluer = $request->input('v_category_gluer') ;
        $v_type_gluer = $request->input('v_type_gluer') ;
        $v_type_punch = $request->input('v_type_punch') ;
        $i_corner_lami1 = $request->input('i_corner_lami1') ;
        $v_size_lami1 = $request->input('v_size_lami1') ;
        $v_direction_lami1 = $request->input('v_direction_lami1') ;
        $i_corner_lami2 = $request->input('i_corner_lami2') ;
        $v_size_lami2 = $request->input('i_size_lami2') ;
        $i_yupo_pp = $request->input('i_yupo_pp') ;
        $i_mat_pp = $request->input('i_mat_pp') ;
        $v_size_pp = $request->input('v_size_pp') ;
        $v_pack_type_pack = $request->input('v_pack_type_pack') ;
        $v_pack_size_pack = $request->input('v_pack_size_pack') ;
        $i_work_size_packman = $request->input('i_work_size_packman') ;
        $v_film_width_packman = $request->input('v_film_width_packman') ;
        $i_check1 = $request->input('i_check1') ;
        $i_check2 = $request->input('i_check2') ;
        $i_check3 = $request->input('i_check3') ;
        $i_check4 = $request->input('i_check4') ;
        $i_check5 = $request->input('i_check5') ;
        $i_check6 = $request->input('i_check6') ;
        $i_quantity_diecutting = $request->input('i_quantity_diecutting') ;
        $v_oprocess_name = $request->input('v_oprocess_name') ;
        $i_oprocess_quantity = $request->input('i_oprocess_quantity') ;
        $i_oprocess_unitprice = $request->input('i_oprocess_unitprice') ;
        $i_oprocess_amount = $request->input('i_oprocess_amount') ;
        //  その他費用
        $v_oitem_name = $request->input('v_oitem_name') ;
        $i_oitem_amount = $request->input('i_oitem_amount') ;


        
    }
}
