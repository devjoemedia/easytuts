<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<style>
.error {height: calc(100vh - 3.75rem);display: flex;}.error__content {padding: $error-tpl-content-padding;display: flex;flex-flow: column;margin: auto;align-items: center;text-align: center;}h2 { color: #CACEDB;  font-weight: 700;  font-size: 3.75rem;  margin-bottom: 0.5625rem;}h3 {font-weight: 500;font-size: 2.1875rem;margin-bottom: 0.625rem;}p,h3 {color: #818EA3;}.btn {text-decoration: none; font-weight: 400;font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,"Helvetica Neue", Arial, sans-serif;
  border: 1px solid transparent;
  padding: 0.5625rem 1rem;
  font-size: 0.75rem;
  line-height: 1.125;
  border-radius: 0.25rem;
  outline: none;
  transition: all 250ms cubic-bezier(0.27, 0.01, 0.38, 1.06); }
  .btn:hover, .btn.hover {cursor: pointer; }
  .btn:focus, .btn.focus {box-shadow: none; }
  .btn:not([disabled]):not(.disabled):active, .btn:not([disabled]):not(.disabled).active {background-image: none;box-shadow: none; }
  .btn.btn-squared {border-radius: 0; }
  .btn.btn-pill {border-radius: 50px; }.btn-accent {
  color: #fff;
  border-color: #007bff;
  background-color: #007bff;
  box-shadow: none; }
  .btn-accent:hover {color: #fff;background-color: #006fe6;border-color: #006fe6;box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05), 0 4px 10px rgba(0, 123, 255, 0.25); }
  .btn-accent:focus, .btn-accent.focus {box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.15), 0 3px 15px rgba(0, 123, 255, 0.2), 0 2px 5px rgba(0, 0, 0, 0.1); }
  .btn-accent.disabled, .btn-accent:disabled {background-color: #007bff;border-color: #007bff;box-shadow: none;cursor: not-allowed; }
  .btn-accent:not(:disabled):not(.disabled):active, .btn-accent:not(:disabled):not(.disabled).active,
  .show > .btn-accent.dropdown-toggle {color: #fff;background-color: #006fe6;border-color: #0062cc;background-image: none;box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125) !important; }

</style>
<body>
    <div class="error">
        <div class="error__content">
          <h2>@yield('code')</h2>
          <h3>@yield('message')</h3>
          <p>There was a problem on our end. Please try again later.</p>
          <a href="/" class="btn btn-accent btn-pill">&larr; Go Back</a>
        </div>
        <!-- / .error_content -->
      </div>
      <!-- / .error -->
</body>
</html>