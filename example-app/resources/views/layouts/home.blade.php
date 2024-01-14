@extends('layouts.default')

@section('title','Homepage')

@section('content')
<div class="content">
    <div class="container-fluid">
            <div class="card card-info card-outline">
                <div class="card-header">
                  <h5 class="m-0">Personal Information</h5>
                </div>
            <div class="card-body">
                <form>
                    <table>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">ชื่อ</label>
                             <input class="col-sm-9 col-form-control" type="text" name="firstname" placeholder="Please enter your first name.">
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">สกุล</label>
                            <input class="col-sm-9 col-form-control" type="text" name="surname" placeholder="Please enter your surname.">
                       </div>
                       <div class="form-group row">
                            <label class="col-sm-2 col-form-label">วัน/เดือน/ปีเกิด</label>
                            <input class="col-sm-5 form-control" type="date" name="date">
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">อายุ</label>
                            <input class="col-sm-5 col-form-control" type="text" name="age" placeholder="Please enter your age.">
                       </div>
                       <div class="form-group row">
                            <label class="col-sm-2 col-form-label">เพศ</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="gender_m" value="male">
                                <label class="form-check-label" for="gender_m">ชาย</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio"  name="gender" id="gender_f" value="female">
                                <label class="form-check-label" for="gender_f">หญิง</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="picture">รูป</label>
                            <input class="col-sm-9 form-control-file" type="file" id="picture">
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="address">ที่อยู่</label>
                            <textarea class="col-sm-9 col-form-control" id="address" rows="4" placeholder="Please enter your address."></textarea>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="colours">สีที่ชอบ</label>
                            <select class="col-sm-2 col-form-control" id="colours">
                                <option selected="true" disabled="disabled">---Select---</option>
                                <option value="red">สีแดง</option>
                                <option value="pink">สีชมพู</option>
                                <option value="orange">สีส้ม</option>
                                <option value="yellow">สีเหลือง</option>
                                <option value="green">สีเขียว</option>
                                <option value="skyblue">สีฟ้า</option>
                                <option value="blue">สีน้ำเงิน</option>
                                <option value="purple">สีม่วง</option>
                                <option value="brown">สีน้ำตาล</option>
                                <option value="black">สีดำ</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">แนวเพลงที่ชอบ</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="genre" id="genre_b" value="blues">
                                <label class="form-check-label" for="genre_b">เพื่อชีวิต</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio"  name="genre" id="genre_f" value="folk">
                                <label class="form-check-label" for="genre_f">ลูกทุ่ง</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="genre" id="genre_o" value="other">
                                <label class="form-check-label" for="genre_o">อื่นๆ</label>
                            </div>
                        </div>
                        <div class="form-footer">
                            <div class = "form-group form-check">
                                    <input class="form-check-input" type="checkbox" id="accept" >
                                    <label class="form-check-label" for="accept">ยินยอมให้เก็บข้อมูล</label>
                            </div>
                            <div class="form-group" style="display:flex; justify-content:space-around">
                                    <button class="btn btn-secondary col-sm-3" type="reset" >Reset</button>
                                    <button class="btn btn-success col-sm-3" type="submit" >Submit</button>

                            </div>
                        </div>
                   </table>
                </form>
            </div>
          </div>
      </div>
    </div>
@endsection
