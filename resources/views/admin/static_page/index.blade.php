@extends('layouts.layout_admin')

@section('content')
    <div class="container">
        <header>
            <h1 class="text-center"> Static Page </h1>
        </header>
        <section>
            <ul>
                <li> <a href="/admin/static_page/home"> หน้าหลัก </a> </li>
                <li>โปรเจค</li>
                <ul>
                    <li><a href="/admin/static_page/project/hinspector">หน้าต ตรวจบ้าน</a></li>
                    <li><a href="/admin/static_page/project/hinterior">หน้าต ตกแต่ง</a></li>
                    <li><a href="/admin/static_page/project/hconstruction">หน้าต ต่อเติม</a></li>
                    <li><a href="/admin/static_page/project/hbutler">หน้า Home Butler</a></li>
                </ul>
            </ul>
        </section>
    </div>
@endsection
