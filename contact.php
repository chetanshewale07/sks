<?php
$pageTitle = "Contact Us";
$pageDescription = "Contact Shree Kaleshwari Security Services — Koparkhairane, Navi Mumbai. Call 8976111002 or request a quote for security and manpower services.";
include 'header.php';
?>

<!-- ===== PAGE HEADER ===== -->
<section class="page-header">
  <div class="container">
    <span class="eyebrow on-dark">Get In Touch</span>
    <h1>Contact Shree Kaleshwari Security Services</h1>
    <nav class="breadcrumb-nav"><a href="index.php">Home</a><i class="bi bi-chevron-right"></i>Contact Us</nav>
  </div>
</section>

<!-- ===== CONTACT INFO + FORM ===== -->
<section class="section-pad" id="quote">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-5 reveal">
        <div class="contact-info-card mb-4">
          <div class="info-row">
            <div class="info-icon"><i class="bi bi-geo-alt-fill"></i></div>
            <div><h6>Corporate Office</h6><p>SS II/749, Sector-15, Koparkhairane, Navi Mumbai – 400709</p></div>
          </div>
          <div class="info-row">
            <div class="info-icon"><i class="bi bi-telephone-fill"></i></div>
            <div><h6>Call Us</h6><a href="tel:+918976111002">8976111002</a></div>
          </div>
          <div class="info-row">
            <div class="info-icon"><i class="bi bi-envelope-fill"></i></div>
            <div><h6>Email Us</h6><a href="mailto:sksecurityservices1002@gmail.com">sksecurityservices1002@gmail.com</a></div>
          </div>
          <div class="info-row mb-0">
            <div class="info-icon"><i class="bi bi-globe"></i></div>
            <div><h6>Website</h6><a href="https://www.sksecurityservices.com" target="_blank">www.sksecurityservices.com</a></div>
          </div>
        </div>
        <div class="d-flex gap-3 flex-wrap">
          <a href="tel:+918976111002" class="btn btn-navy"><i class="bi bi-telephone-fill"></i> Call Now</a>
          <a href="https://wa.me/918976111002" target="_blank" class="btn btn-gold"><i class="bi bi-whatsapp"></i> WhatsApp Us</a>
        </div>
      </div>

      <div class="col-lg-7 reveal">
        <div class="quote-panel">
          <span class="eyebrow">Request A Quote</span>
          <h2 class="section-title" style="font-size:1.6rem;">Need Security Services?</h2>
          <p class="section-sub mb-4">Tell us your requirement and our team will get in touch with you.</p>

          <!-- Connect this form's action to your PHP mail handler to deliver enquiries to sksecurityservices1002@gmail.com -->
          <form action="send-quote.php" method="POST" class="needs-validation" novalidate>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label" for="fullName">Full Name *</label>
                <input type="text" class="form-control" id="fullName" name="fullName" required>
                <div class="invalid-feedback">Please enter your full name.</div>
              </div>
              <div class="col-md-6">
                <label class="form-label" for="companyName">Company / Organization Name</label>
                <input type="text" class="form-control" id="companyName" name="companyName">
              </div>
              <div class="col-md-6">
                <label class="form-label" for="mobileNumber">Mobile Number *</label>
                <input type="tel" class="form-control" id="mobileNumber" name="mobileNumber" pattern="[0-9]{10}" required>
                <div class="invalid-feedback">Please enter a valid 10-digit mobile number.</div>
              </div>
              <div class="col-md-6">
                <label class="form-label" for="emailAddress">Email Address *</label>
                <input type="email" class="form-control" id="emailAddress" name="emailAddress" required>
                <div class="invalid-feedback">Please enter a valid email address.</div>
              </div>
              <div class="col-md-6">
                <label class="form-label" for="serviceRequired">Service Required *</label>
                <select class="form-select" id="serviceRequired" name="serviceRequired" required>
                  <option value="" selected disabled>Select a service</option>
                  <option>Security Guard</option>
                  <option>Security Supervisor</option>
                  <option>Bouncer</option>
                  <option>Escort Security</option>
                  <option>Housekeeping</option>
                  <option>Labour Supply</option>
                  <option>HR Solutions</option>
                  <option>Other</option>
                </select>
                <div class="invalid-feedback">Please select a service.</div>
              </div>
              <div class="col-md-6">
                <label class="form-label" for="location">Location *</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="e.g. Navi Mumbai" required>
                <div class="invalid-feedback">Please enter your location.</div>
              </div>
              <div class="col-md-6">
                <label class="form-label" for="personnelCount">Number of Personnel Required</label>
                <input type="number" min="1" class="form-control" id="personnelCount" name="personnelCount">
              </div>
              <div class="col-12">
                <label class="form-label" for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Share any additional details about your requirement"></textarea>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-gold btn-lg w-100 w-md-auto">Request a Quote</button>
              </div>
            </div>
          </form>

          <div class="form-success-msg d-none text-center py-4">
            <i class="bi bi-check-circle-fill" style="font-size:2.4rem; color:var(--gold-700);"></i>
            <h4 class="mt-3">Thank you!</h4>
            <p class="section-sub">Your enquiry has been received. Our team will get in touch with you shortly.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== MAP ===== -->
<section class="section-pad bg-paper-dim">
  <div class="container">
    <div class="row justify-content-center text-center mb-4">
      <div class="col-lg-7 reveal">
        <span class="eyebrow justify-content-center">Find Us</span>
        <h2 class="section-title">Our Office Location</h2>
      </div>
    </div>
    <div class="reveal">
      <iframe class="map-frame" src="https://www.google.com/maps?q=Koparkhairane,+Navi+Mumbai,+Maharashtra+400709&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Shree Kaleshwari Security Services Office Location"></iframe>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
