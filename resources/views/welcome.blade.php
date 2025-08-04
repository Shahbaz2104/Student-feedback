

@extends('layouts.app')

@section('content')
<!-- Chainsaw Man Themed Section -->
<div class="container-fluid chainsaw-section text-white py-5">
  <div class="row">
    <div class="col-md-12 text-center">
      <h1 class="chainsaw-heading">🔪 Welcome to the Madness</h1>
      <p class="lead">This Laravel app draws its power from chaos — styled with the fury of Chainsaw Man.</p>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-md-12 text-center">
      <p>Unleash the features. Dive into destruction. Built with Bootstrap, sharpened by blade.</p>
    </div>
  </div>
</div>

<hr class="bg-danger border-3 opacity-100">


<!-- Pinterest-style Image Gallery -->
<div class="container my-5" id="gallery-container">
  <div class="gallery">
    <div class="gallery-item"><img src="/images/pic1.jpeg" alt="Student studying in classroom"></div>
    <div class="gallery-item"><img src="/images/pic2.jpeg" alt="Group discussion among students"></div>
    <div class="gallery-item"><img src="/images/pic3.jpeg" alt="Teacher giving feedback to student"></div>
    <div class="gallery-item"><img src="/images/pic4.jpeg" alt="Student nature therapy"></div>
    <!-- Add more items as needed -->
  </div>
</div>


<hr class="bg-danger border-3 opacity-100">


<!-- resources/views/welcome.blade.php -->
<div class="text-center mt-5">
    <a href="{{ route('feedback.create') }}" class="btn btn-lg btn-primary">Give Feedback</a>
    <a href="{{ route('feedback.index') }}" class="btn btn-lg btn-secondary">View Feedback</a>
</div>

<style>

body {
  background: linear-gradient(120deg, #b3a7a7ff, #1a1a1a);
  color: white;
  font-family: 'Bebas Neue', sans-serif;
}


/* Pinterest-like Masonry Grid */
.gallery {
  column-count: 3;
  column-gap: 1rem;
  background-color: #3f422eff;
  padding: 1rem;
  border-radius: 8px;
}

.gallery-item {
  break-inside: avoid;
  margin-bottom: 1rem;
  overflow: hidden;
  border-radius: 12px;
  background: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  box-shadow: 0 8px 24px rgba(255, 0, 0, 0.15), 0 4px 10px rgba(0, 0, 0, 0.2);
  transition: transform 0.4s ease, box-shadow 0.3s ease;
  border: 1px solid rgba(255, 255, 255, 0.1);
  position: relative;
}

.gallery-item::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(120deg, rgba(255, 0, 0, 0.1), rgba(255, 255, 255, 0));
  opacity: 0.3;
  pointer-events: none;
  z-index: 1;
}

.gallery-item:hover {
  transform: scale(1.05);
  box-shadow: 0 0 30px rgba(255, 0, 0, 0.4), 0 0 10px rgba(255, 255, 255, 0.2);
  z-index: 2;
}

.gallery-item img {
  width: 100%;
  height: auto;
  display: block;
  object-fit: cover;
  border-radius: 12px;
  position: relative;
  z-index: 2;
}


/* Responsive columns */
@media (max-width: 992px) {
  .gallery {
    column-count: 2;
  }
}
@media (max-width: 600px) {
  .gallery {
    column-count: 1;
  }
}


@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

.chainsaw-section {
  background: linear-gradient(145deg, #111, #1a1a1a);
  border-top: 5px solid red;
  border-bottom: 5px solid red;
  box-shadow: inset 0 0 20px rgba(255, 0, 0, 0.4);
  font-family: 'Bebas Neue', sans-serif;
}

.chainsaw-heading {
  font-size: 3rem;
  letter-spacing: 2px;
  color: #ff2e2e;
  text-shadow: 2px 2px 4px black;
}

.chainsaw-section p {
  font-size: 1.2rem;
  color: #ccc;
}

hr.bg-danger {
  height: 5px;
  margin: 0;
}

</style>



@endsection

