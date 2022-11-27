@extends('dashboard.layouts.main')
@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
  </div>

  @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
    <div class="alert alert-success col-lg-8" role="alert">
      {{ session('success') }}
    </div>
  @endif
@@ -20,7 +20,7 @@
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Acction</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
@@ -31,8 +31,12 @@
            <td>{{ $post->category->name }}</td>
            <td>
              <a href="/dashboard/posts/{{ $post->slug }}" class='badge bg-info' ><span data-feather='eye'></span></a>
              <a href="/dashboard/posts/{{ $post->slug }}" class='badge bg-warning' ><span data-feather='edit'></span></a>
              <a href="/dashboard/posts/{{ $post->slug }}" class='badge bg-danger' ><span data-feather='x-circle'></span></a>
              <a href="/dashboard/posts/{{ $post->slug }}/edit" class='badge bg-warning' ><span data-feather='edit'></span></a>
              <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete') 
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather='x-circle'></span></button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table> 
  </div>
@endsection