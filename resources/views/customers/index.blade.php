@extends('layout', ['title' => 'Customers'])
@section('content')

<div class="details-grid">
    <section class="top">
      <div class="container">
        <header class="details-name">
          <h2>Customers list</h2>
        </header>
      </div>
    </section>
    <div class="container">
      <div class="index-grid">
        @if(empty($customers))
          <p>No customers available.</p>
        @else    
          @foreach ($customers as $customer)
          <a class="index-item" href="{{ route('customers-details', $customer->id) }}">
            <aside>
              <span class="index-icon">
                <i class="fas fa-user-circle"></i>
              </span> 
              <p>{{ $customer->name }}</p>
              <p class="overview">{{ count($customer->sales) }} sales</p>
            </aside>
          </a>
          @endforeach
        @endif
      </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="{{ asset('js/details.js') }}"></script>
@endsection


