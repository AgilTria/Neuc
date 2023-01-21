@extends('layout.app')

@section('title','Dashboard')

@section('content')
        <table class="table">
            <tr>
                <thead class="is-striped">
                    <th class="">Instansi</th>
                    <th class="">Alamat</th>
                    <th class="has-text-centered">Verify</th>
                    <th class="has-text-centered">aksi</th>
                    <th></th>
            </tr>
            <tbody>
              <tr>
                <td>
                  <article class="media">
                    <figure class="media-left">
                      <p class="image is-64x64">
                        <img src="https://mdbootstrap.com/img/new/avatars/3.jpg" class="is-rounded">
                      </p>
                    </figure>
                      <div class="media-content">
                        <div class="content py-auto">
                          <p class="has-text-weight-light">
                            <strong>Akrom</strong>
                            <br>akrom@example.com
                          </p>
                        </div>
                    </figure>
                  </article>
                </td>
                <td class="has-text-weight-light py-auto">Multidisciplinary Web Entrepreneur<br> Developer</td>
                <td class="has-text-centered"> <button class="button has-text-link-dark is-rounded has-background-link-light">Verified</button></td>
                <td class="has-text-centered"> <button class="button is-outlined is-rounded is-link"> Edit</button></td>
              </tr>
              <tr>
                <td>
                  <article class="media">
                    <figure class="media-left">
                      <p class="image is-64x64">
                        <img src="https://mdbootstrap.com/img/new/avatars/5.jpg" class="is-rounded">
                      </p>
                    </figure>
                      <div class="media-content">
                        <div class="content py-auto">
                          <p class="has-text-weight-light">
                            <strong>Nenifer Lofess </strong>
                            <br>loffes.cooper@example.com
                          </p>
                        </div>
                    </figure>
                  </article>
                </td>
                <td class="has-text-weight-light py-auto">Regional Paradigm Technician<br> Optimization</td>
                <td class="has-text-centered"> <button class="button has-text-warning-dark is-rounded has-background-warning-light">Unverified</button></td>
                <td class="has-text-centered"> <button class="button is-rounded is-link"> Verification</button></td>
              </tr>
              <tr>
                <td>
                  <article class="media">
                    <figure class="media-left">
                      <p class="image is-64x64">
                        <img src="https://mdbootstrap.com/img/new/avatars/1.jpg" class="is-rounded">
                      </p>
                    </figure>
                      <div class="media-content">
                        <div class="content py-auto">
                          <p class="has-text-weight-light">
                            <strong>SDN MADUSARI SECANG</strong>
                            <br>jhon.smith@example.com
                          </p>
                        </div>
                    </figure>
                  </article>
                </td>
                <td class="has-text-weight-light py-auto">Regional Paradigm Technician<br> Optimization</td>
                <td class="has-text-centered"> <button class="button has-text-link-dark is-rounded has-background-link-light">Verified</button></td>
                <td class="has-text-centered"> <button class="button is-outlined is-rounded is-link"> Edit</button></td>
              </tr>
                <tr>
                  <td>
                    <article class="media">
                      <figure class="media-left">
                        <p class="image is-64x64">
                          <img src="https://mdbootstrap.com/img/new/avatars/6.jpg" class="is-rounded">
                        </p>
                      </figure>
                        <div class="media-content">
                          <div class="content py-auto">
                            <p class="has-text-weight-light">
                              <strong>SMP2N SLEMAN</strong>
                              <br>suliym.info@example.com
                            </p>
                          </div>
                      </figure>
                    </article>
                  </td>
                  <td class="has-text-weight-light py-auto">Lead Implementation Liaisonbr <br> Mobility</td>
                  <td class="has-text-centered"> <button class="button has-text-link-dark is-rounded has-background-link-light">Verified</button></td>
                  <td class="has-text-centered"> <button class="button is-outlined is-rounded is-link"> Edit</button></td>
                </tr>
                <tr>
                    <td>
                      <article class="media">
                        <figure class="media-left">
                          <p class="image is-64x64">
                            <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="is-rounded">
                          </p>
                        </figure>
                          <div class="media-content">
                            <div class="content py-auto">
                              <p class="has-text-weight-light">
                                <strong>SMK BARUMEKTA BANTUL</strong>
                                <br>alex.semuel@example.com
                              </p>
                            </div>
                        </figure>
                      </article>
                    </td>
                    <td class="has-text-weight-light py-auto">Applications Engineer<br> Security</td>
                    <td class="has-text-centered"> <button class="button has-text-link-dark is-rounded has-background-link-light">Verified</button></td>
                    <td class="has-text-centered"> <button class="button is-outlined is-rounded is-link"> Edit</button></td>
                  </tr>
                <tr>
                    <td>
                      <article class="media">
                        <figure class="media-left">
                          <p class="image is-64x64">
                            <img src="https://mdbootstrap.com/img/new/avatars/9.jpg" class="is-rounded">
                          </p>
                        </figure>
                          <div class="media-content">
                            <div class="content py-auto">
                              <p class="has-text-weight-light">
                                <strong>BEM UGM 2017-2021</strong>
                                <br>limition@example.com
                              </p>
                            </div>
                        </figure>
                      </article>
                    </td>
                    <td class="has-text-weight-light py-auto">Regional Paradigm Technician<br> Optimization</td>
                    <td class="has-text-centered"> <button class="button has-text-link-dark is-rounded has-background-link-light">Verified</button></td>
                    <td class="has-text-centered"> <button class="button is-outlined is-rounded is-link"> Edit</button></td>
                  </tr>
            </tbody>
    </div>
@endsection
