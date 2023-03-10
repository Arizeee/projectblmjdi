@extends('layouts.template')

@section('title')

@section('content')

<div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Dashboard</span>
      <input type="text" placeholder="Search..." style="width: 56%; height: 30px;">
    </div>
    <div class="topright">
      <ul>
        <li>{{ auth()->user()->name }}</li>
      <img src="profile/{{ auth()->user()->foto }}" alt="tes">
      <li>
        
      </li>
        <li><iconify-icon icon="ant-design:setting-filled"></iconify-icon></li>
      </ul>
    </div>
    <div class="contain">
      <div class="hero-img" style="width: 88%">
        <div class="hero-img-text">
          <p>Valorant</p>
          <h3>Best Tactical Shooter Game.</h3>
          {{-- <button>Play Free</button> --}}
          <img src="assets/images/Phoenix_Artwork_Full-removebg-preview.png" alt="">
        </div>
      </div>
      
    </div>
    <div class="contain-1">
      <p>List Games (Scroll)</p>
      <div class="kotak-1">
        <div class="kotak-1-scroll">
          <div class="item-games">Valorant</div>
          <div class="item-games">Genshin Impact</div>
          <div class="item-games">Point Blank</div>
          <div class="item-games">Fall Guys</div>
          <div class="item-games">PUBG</div>
          <div class="item-games">Apex Legends</div>
          <div class="item-games">Multiplayer 1</div>
          <div class="item-games">Multiplayer 2</div>
          <div class="item-games">Multiplayer 3</div>
          <div class="item-games">Multiplayer 4</div>
        </div>
      </div>
      <div class="kotak-2">
        <div class="grid">
          <div class="grid-item">
            <div class="card">
              <img class="card-img" src="assets/images/VAL_2560x1440-a875b64f871200771ee9397df1d7050b.jpeg" alt="Valorant" />
              <div class="card-content">
                <h1 class="card-header">Valorant</h1>
              </div>
            </div>
          </div>
          <div class="grid-item">
            <div class="card">
              <img class="card-img" src="assets/images/maxresdefault.jpg" alt="Genshin Impact" />
              <div class="card-content">
                <h1 class="card-header">Genshin Impact</h1>
              </div>
            </div>
          </div>
          <div class="grid-item">
            <div class="card">
              <img class="card-img" src="assets/images/deretan-berita-point-blank-terbaru-yang-perlu-kamu-tahu.jpg" alt="Point Blank" />
              <div class="card-content">
                <h1 class="card-header">Point Blank</h1>
              </div>
            </div>
          </div>
          <div class="grid-item">
            <div class="card">
              <img class="card-img" src="assets/images/Fall-Guys-Key-Art_Thumb_JPG.jpg" alt="Fall Guys" />
              <div class="card-content">
                <h1 class="card-header">Fall Guys</h1>
              </div>
            </div>
          </div>
          <div class="grid-item">
            <div class="card">
              <img class="card-img" src="assets/images/capsule_616x353.jpg" alt="PUBG" />
              <div class="card-content">
                <h1 class="card-header">PUBG</h1>
              </div>
            </div>
          </div>
          <div class="grid-item">
            <div class="card">
              <img class="card-img" src="assets/images/apex-featured-image-16x9.jpg.adapt.crop16x9.1023w.jpg" alt="Apex Legends" />
              <div class="card-content">
                <h1 class="card-header">Apex Legends</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="contain-2">
      <p style=" font-size: 20px; font-weight: bold; margin-top: 2rem; padding-bottom: 2rem;">Trend Game 2023</p>
      <!-- <div class="btncont"> -->
        <div class="tbl-card">
          {{-- <div class="btn-data">
            {{-- <p><a href="">+ Tambah</a></p> --}}
          {{-- </div>  --}}
          <table id="tbl" style="width:  100% ">
            <tr>
              <th scope="col">Foto</th>
              <th scope="col">Game</th>
              <th scope="col" style="border-top-right-radius: 30px;">Jumlah Pemain</th>
            </tr>
            {{-- {{ $data }} --}}
            @foreach($data as $item)
              <tr>
                    <td>
                      <img src="{{ asset('fotopemain/'.$item->foto) }}" alt="" style="width: 50px; height: 50px; border-radius: 50%;">
                    </td>
                    <td>{{ $item->nama_game }}</td>
                    <td>{{ count(App\Models\Pemain::where("game_id", $item->id)->get()) }}</td>
                    {{-- <td>
                      <button  class="btn-2"> <a href='/delatetrend/{{ $item->id }}'><iconify-icon icon="uil:trash"></iconify-icon></a></button>
                    </td> --}}
              </tr>
            @endforeach
           </table>
        </div>
    </div>

    
   
@endsection