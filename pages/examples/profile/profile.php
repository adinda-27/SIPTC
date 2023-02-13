<!-- cek apakah sudah login -->
<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}
	?>
  
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    .btn-left {
    float: left;
}
.btn-right {
    float: right;
}
   :root {
  --blue: #5e72e4;
  --indigo: #5603ad;
  --purple: #8965e0;
  --pink: #f3a4b5;
  --red: #f5365c;
  --orange: #fb6340;
  --yellow: #ffd600;
  --green: #2dce89;
  --teal: #11cdef;
  --cyan: #2bffc6;
  --white: #fff;
  --gray: #8898aa;
  --gray-dark: #32325d;
  --light: #ced4da;
  --lighter: #e9ecef;
  --primary: #5e72e4;
  --secondary: #f7fafc;
  --success: #2dce89;
  --info: #11cdef;
  --warning: #fb6340;
  --danger: #f5365c;
  --light: #adb5bd;
  --dark: #212529;
  --default: #172b4d;
  --white: #fff;
  --neutral: #fff;
  --darker: black;
  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --font-family-sans-serif: Open Sans, sans-serif;
  --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, 'Liberation Mono', 'Courier New', monospace;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -ms-overflow-style: scrollbar;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

@-ms-viewport {
  width: device-width;
}

figcaption,
footer,
header,
main,
nav,
section {
  display: block;
}

body {
  font-family: Open Sans, sans-serif;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  margin: 0;
  text-align: left;
  color: #525f7f;
  background-color: #f8f9fe;
}

[tabindex='-1']:focus {
  outline: 0 !important;
}

hr {
  overflow: visible;
  box-sizing: content-box;
  height: 0;
}

h1,
h3,
h4,
h5,
h6 {
  margin-top: 0;
  margin-bottom: .5rem;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

address {
  font-style: normal;
  line-height: inherit;
  margin-bottom: 1rem;
}

ul {
  margin-top: 0;
  margin-bottom: 1rem;
}

ul ul {
  margin-bottom: 0;
}

dfn {
  font-style: italic;
}

strong {
  font-weight: bolder;
}

a {
  text-decoration: none;
  color: #5e72e4;
  background-color: transparent;
  -webkit-text-decoration-skip: objects;
}

a:hover {
  text-decoration: none;
  color: #233dd2;
}

a:not([href]):not([tabindex]) {
  text-decoration: none;
  color: inherit;
}

a:not([href]):not([tabindex]):hover,
a:not([href]):not([tabindex]):focus {
  text-decoration: none;
  color: inherit;
}

a:not([href]):not([tabindex]):focus {
  outline: 0;
}

code {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, 'Liberation Mono', 'Courier New', monospace;
  font-size: 1em;
}

img {
  vertical-align: middle;
  border-style: none;
}

caption {
  padding-top: 1rem;
  padding-bottom: 1rem;
  caption-side: bottom;
  text-align: left;
  color: #8898aa;
}

label {
  display: inline-block;
  margin-bottom: .5rem;
}



input,
textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
  margin: 0;
}

input {
  overflow: visible;
}

input[type='radio'],
input[type='checkbox'] {
  box-sizing: border-box;
  padding: 0;
}

input[type='date'],
input[type='time'],
input[type='datetime-local'],
input[type='month'] {
  -webkit-appearance: listbox;
}

textarea {
  overflow: auto;
  resize: vertical;
}

legend {
  font-size: 1.5rem;
  line-height: inherit;
  display: block;
  width: 100%;
  max-width: 100%;
  margin-bottom: .5rem;
  padding: 0;
  white-space: normal;
  color: inherit;
}

progress {
  vertical-align: baseline;
}

[type='search'] {
  outline-offset: -2px;
  -webkit-appearance: none;
}

[hidden] {
  display: none !important;
}

h1,
h3,
h4,
h5,
h6,
.h1,
.h3,
.h4,
.h5,
.h6 {
  font-family: inherit;
  font-weight: 600;
  line-height: 1.5;
  margin-bottom: .5rem;
  color: #32325d;
}

h1,
.h1 {
  font-size: 1.625rem;
}

h3,
.h3 {
  font-size: 1.0625rem;
}

h4,
.h4 {
  font-size: .9375rem;
}

h5,
.h5 {
  font-size: .8125rem;
}

h6,
.h6 {
  font-size: .625rem;
}

.display-2 {
  font-size: 2.75rem;
  font-weight: 600;
  line-height: 1.5;
}

hr {
  margin-top: 2rem;
  margin-bottom: 2rem;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, .1);
}

code {
  font-size: 87.5%;
  word-break: break-word;
  color: #f3a4b5;
}

a>code {
  color: inherit;
}

.container {
  width: 100%;
  margin-right: auto;
  margin-left: auto;
  padding-right: 15px;
  padding-left: 15px;
}

@media (min-width: 576px) {
  .container {
    max-width: 540px;
  }
}

@media (min-width: 768px) {
  .container {
    max-width: 720px;
  }
}

@media (min-width: 992px) {
  .container {
    max-width: 960px;
  }
}

@media (min-width: 1200px) {
  .container {
    max-width: 1140px;
  }
}

.container-fluid {
  width: 100%;
  margin-right: auto;
  margin-left: auto;
  padding-right: 15px;
  padding-left: 15px;
}

.row {
  display: flex;
  margin-right: -15px;
  margin-left: -15px;
  flex-wrap: wrap;
}

.col-4,
.col-8,
.col,
.col-md-10,
.col-md-12,
.col-lg-3,
.col-lg-4,
.col-lg-6,
.col-lg-7,
.col-xl-4,
.col-xl-6,
.col-xl-8 {
  position: relative;
  width: 100%;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}

.col {
  max-width: 100%;
  flex-basis: 0;
  flex-grow: 1;
}

.col-4 {
  max-width: 33.33333%;
  flex: 0 0 33.33333%;
}

.col-8 {
  max-width: 66.66667%;
  flex: 0 0 66.66667%;
}

@media (min-width: 768px) {

  .col-md-10 {
    max-width: 83.33333%;
    flex: 0 0 83.33333%;
  }

  .col-md-12 {
    max-width: 100%;
    flex: 0 0 100%;
  }
}

@media (min-width: 992px) {

  .col-lg-3 {
    max-width: 25%;
    flex: 0 0 25%;
  }

  .col-lg-4 {
    max-width: 33.33333%;
    flex: 0 0 33.33333%;
  }

  .col-lg-6 {
    max-width: 50%;
    flex: 0 0 50%;
  }

  .col-lg-7 {
    max-width: 58.33333%;
    flex: 0 0 58.33333%;
  }

  .order-lg-2 {
    order: 2;
  }
}

@media (min-width: 1200px) {

  .col-xl-4 {
    max-width: 33.33333%;
    flex: 0 0 33.33333%;
  }

  .col-xl-6 {
    max-width: 50%;
    flex: 0 0 50%;
  }

  .col-xl-8 {
    max-width: 66.66667%;
    flex: 0 0 66.66667%;
  }

  .order-xl-1 {
    order: 1;
  }

  .order-xl-2 {
    order: 2;
  }
}

.form-control {
  font-size: 1rem;
  line-height: 1.5;
  display: block;
  width: 100%;
  height: calc(2.75rem + 2px);
  padding: .625rem .75rem;
  transition: all .2s cubic-bezier(.68, -.55, .265, 1.55);
  color: #8898aa;
  border: 1px solid #cad1d7;
  border-radius: .375rem;
  background-color: #fff;
  background-clip: padding-box;
  box-shadow: none;
}

@media screen and (prefers-reduced-motion: reduce) {
  .form-control {
    transition: none;
  }
}

.form-control::-ms-expand {
  border: 0;
  background-color: transparent;
}

.form-control:focus {
  color: #8898aa;
  border-color: rgba(50, 151, 211, .25);
  outline: 0;
  background-color: #fff;
  box-shadow: none, none;
}

.form-control:-ms-input-placeholder {
  opacity: 1;
  color: #adb5bd;
}

.form-control::-ms-input-placeholder {
  opacity: 1;
  color: #adb5bd;
}

.form-control::placeholder {
  opacity: 1;
  color: #adb5bd;
}

.form-control:disabled,
.form-control[readonly] {
  opacity: 1;
  background-color: #e9ecef;
}

textarea.form-control {
  height: auto;
}

.form-group {
  margin-bottom: 1.5rem;
}

.form-inline {
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

@media (min-width: 576px) {
  .form-inline label {
    display: flex;
    margin-bottom: 0;
    align-items: center;
    justify-content: center;
  }

  .form-inline .form-group {
    display: flex;
    margin-bottom: 0;
    flex: 0 0 auto;
    flex-flow: row wrap;
    align-items: center;
  }

  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }

  .form-inline .input-group {
    width: auto;
  }
}

.btn {
  font-size: 1rem;
  font-weight: 600;
  line-height: 1.5;
  display: inline-block;
  padding: .625rem 1.25rem;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
  text-align: center;
  vertical-align: middle;
  white-space: nowrap;
  border: 1px solid transparent;
  border-radius: .375rem;
}

@media screen and (prefers-reduced-motion: reduce) {
  .btn {
    transition: none;
  }
}

.btn:hover,
.btn:focus {
  text-decoration: none;
}

.btn:focus {
  outline: 0;
  box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08);
}

.btn:disabled {
  opacity: .65;
  box-shadow: none;
}

.btn:not(:disabled):not(.disabled) {
  cursor: pointer;
}

.btn:not(:disabled):not(.disabled):active {
  box-shadow: none;
}

.btn:not(:disabled):not(.disabled):active:focus {
  box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08), none;
}

.btn-primary {
  color: #fff;
  border-color: #5e72e4;
  background-color: #5e72e4;
  box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}

.btn-primary:hover {
  color: #fff;
  border-color: #5e72e4;
  background-color: #5e72e4;
}

.btn-primary:focus {
  box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(94, 114, 228, .5);
}

.btn-primary:disabled {
  color: #fff;
  border-color: #5e72e4;
  background-color: #5e72e4;
}

.btn-primary:not(:disabled):not(.disabled):active {
  color: #fff;
  border-color: #5e72e4;
  background-color: #324cdd;
}

.btn-primary:not(:disabled):not(.disabled):active:focus {
  box-shadow: none, 0 0 0 0 rgba(94, 114, 228, .5);
}

.btn-info {
  color: #fff;
  border-color: #11cdef;
  background-color: #11cdef;
  box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}

.btn-info:hover {
  color: #fff;
  border-color: #11cdef;
  background-color: #11cdef;
}

.btn-info:focus {
  box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(17, 205, 239, .5);
}

.btn-info:disabled {
  color: #fff;
  border-color: #11cdef;
  background-color: #11cdef;
}

.btn-info:not(:disabled):not(.disabled):active {
  color: #fff;
  border-color: #11cdef;
  background-color: #0da5c0;
}

.btn-info:not(:disabled):not(.disabled):active:focus {
  box-shadow: none, 0 0 0 0 rgba(17, 205, 239, .5);
}

.btn-default {
  color: #fff;
  border-color: #172b4d;
  background-color: #172b4d;
  box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}

.btn-default:hover {
  color: #fff;
  border-color: #172b4d;
  background-color: #172b4d;
}

.btn-default:focus {
  box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(23, 43, 77, .5);
}

.btn-default:disabled {
  color: #fff;
  border-color: #172b4d;
  background-color: #172b4d;
}

.btn-default:not(:disabled):not(.disabled):active {
  color: #fff;
  border-color: #172b4d;
  background-color: #0b1526;
}

.btn-default:not(:disabled):not(.disabled):active:focus {
  box-shadow: none, 0 0 0 0 rgba(23, 43, 77, .5);
}

.btn-sm {
  font-size: .875rem;
  line-height: 1.5;
  padding: .25rem .5rem;
  border-radius: .375rem;
}

.input-group {
  position: relative;
  display: flex;
  width: 100%;
  flex-wrap: wrap;
  align-items: stretch;
}

.input-group>.form-control {
  position: relative;
  width: 1%;
  margin-bottom: 0;
  flex: 1 1 auto;
}

.input-group>.form-control+.form-control {
  margin-left: -1px;
}

.input-group>.form-control:focus {
  z-index: 3;
}

.input-group>.form-control:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group>.form-control:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.input-group-prepend {
  display: flex;
}

.input-group-prepend .btn {
  position: relative;
  z-index: 2;
}

.input-group-prepend .btn+.btn,
.input-group-prepend .btn+.input-group-text,
.input-group-prepend .input-group-text+.input-group-text,
.input-group-prepend .input-group-text+.btn {
  margin-left: -1px;
}

.input-group-prepend {
  margin-right: -1px;
}

.input-group-text {
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  display: flex;
  margin-bottom: 0;
  padding: .625rem .75rem;
  text-align: center;
  white-space: nowrap;
  color: #adb5bd;
  border: 1px solid #cad1d7;
  border-radius: .375rem;
  background-color: #fff;
  align-items: center;
}

.input-group-text input[type='radio'],
.input-group-text input[type='checkbox'] {
  margin-top: 0;
}

.input-group>.input-group-prepend>.btn,
.input-group>.input-group-prepend>.input-group-text {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group>.input-group-prepend:not(:first-child)>.btn,
.input-group>.input-group-prepend:not(:first-child)>.input-group-text,
.input-group>.input-group-prepend:first-child>.btn:not(:first-child),
.input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.nav {
  display: flex;
  margin-bottom: 0;
  padding-left: 0;
  list-style: none;
  flex-wrap: wrap;
}

.nav-link {
  display: block;
  padding: .25rem .75rem;
}

.nav-link:hover,
.nav-link:focus {
  text-decoration: none;
}

.navbar {
  position: relative;
  display: flex;
  padding: 1rem 1rem;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
}

.navbar>.container,
.navbar>.container-fluid {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
}

.navbar-nav {
  display: flex;
  flex-direction: column;
  margin-bottom: 0;
  padding-left: 0;
  list-style: none;
}

.navbar-nav .nav-link {
  padding-right: 0;
  padding-left: 0;
}


@media (max-width: 767.98px) {

  .navbar-expand-md>.container,
  .navbar-expand-md>.container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 768px) {
  .navbar-expand-md {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }

  .navbar-expand-md .navbar-nav {
    flex-direction: row;
  }


  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: 1rem;
    padding-left: 1rem;
  }

  .navbar-expand-md>.container,
  .navbar-expand-md>.container-fluid {
    flex-wrap: nowrap;
  }
}

.navbar-dark .navbar-nav .nav-link {
  color: rgba(255, 255, 255, .95);
}

.navbar-dark .navbar-nav .nav-link:hover,
.navbar-dark .navbar-nav .nav-link:focus {
  color: rgba(255, 255, 255, .65);
}

.card {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  border: 1px solid rgba(0, 0, 0, .05);
  border-radius: .375rem;
  background-color: #fff;
  background-clip: border-box;
}

.card>hr {
  margin-right: 0;
  margin-left: 0;
}

.card-body {
  padding: 1.5rem;
  flex: 1 1 auto;
}

.card-header {
  margin-bottom: 0;
  padding: 1.25rem 1.5rem;
  border-bottom: 1px solid rgba(0, 0, 0, .05);
  background-color: #fff;
}

.card-header:first-child {
  border-radius: calc(.375rem - 1px) calc(.375rem - 1px) 0 0;
}

@keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0;
  }

  to {
    background-position: 0 0;
  }
}

.progress {
  font-size: .75rem;
  display: flex;
  overflow: hidden;
  height: 1rem;
  border-radius: .375rem;
  background-color: #e9ecef;
  box-shadow: inset 0 .1rem .1rem rgba(0, 0, 0, .1);
}

.media {
  display: flex;
  align-items: flex-start;
}

.media-body {
  flex: 1 1;
}

.bg-secondary {
  background-color: #f7fafc !important;
}

a.bg-secondary:hover,
a.bg-secondary:focus,

.bg-default {
  background-color: #172b4d !important;
}

a.bg-default:hover,
a.bg-default:focus,
.bg-white {
  background-color: #fff !important;
}

a.bg-white:hover,
a.bg-white:focus,

.bg-white {
background-color: #e6e6e6 !important;
}

.bg-white {
  background-color: #fff !important;
}

.border-0 {
  border: 0 !important;
}

.rounded-circle {
  border-radius: 50% !important;
}

.d-none {
  display: none !important;
}

.d-flex {
  display: flex !important;
}

@media (min-width: 768px) {

  .d-md-flex {
    display: flex !important;
  }
}

@media (min-width: 992px) {

  .d-lg-inline-block {
    display: inline-block !important;
  }

  .d-lg-block {
    display: block !important;
  }
}

.justify-content-center {
  justify-content: center !important;
}

.justify-content-between {
  justify-content: space-between !important;
}

.align-items-center {
  align-items: center !important;
}

@media (min-width: 1200px) {

  .justify-content-xl-between {
    justify-content: space-between !important;
  }
}

.float-right {
  float: right !important;
}

.shadow,
.card-profile-image img {
  box-shadow: 0 0 2rem 0 rgba(136, 152, 170, .15) !important;
}

.m-0 {
  margin: 0 !important;
}

.mt-0 {
  margin-top: 0 !important;
}

.mb-0 {
  margin-bottom: 0 !important;
}

.mr-2 {
  margin-right: .5rem !important;
}

.ml-2 {
  margin-left: .5rem !important;
}

.mr-3 {
  margin-right: 1rem !important;
}

.mt-4,
.my-4 {
  margin-top: 1.5rem !important;
}

.mr-4 {
  margin-right: 1.5rem !important;
}

.mb-4,
.my-4 {
  margin-bottom: 1.5rem !important;
}

.mb-5 {
  margin-bottom: 3rem !important;
}

.mt--7 {
  margin-top: -6rem !important;
}

.pt-0 {
  padding-top: 0 !important;
}

.pr-0 {
  padding-right: 0 !important;
}

.pb-0 {
  padding-bottom: 0 !important;
}

.pt-5 {
  padding-top: 3rem !important;
}

.pt-8 {
  padding-top: 8rem !important;
}

.pb-8 {
  padding-bottom: 8rem !important;
}

.m-auto {
  margin: auto !important;
}

@media (min-width: 768px) {

  .mt-md-5 {
    margin-top: 3rem !important;
  }

  .pt-md-4 {
    padding-top: 1.5rem !important;
  }

  .pb-md-4 {
    padding-bottom: 1.5rem !important;
  }
}

@media (min-width: 992px) {

  .pl-lg-4 {
    padding-left: 1.5rem !important;
  }

  .pt-lg-8 {
    padding-top: 8rem !important;
  }

  .ml-lg-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 1200px) {

  .mb-xl-0 {
    margin-bottom: 0 !important;
  }
}

.text-right {
  text-align: right !important;
}

.text-center {
  text-align: center !important;
}

.text-uppercase {
  text-transform: uppercase !important;
}

.font-weight-light {
  font-weight: 300 !important;
}

.font-weight-bold {
  font-weight: 600 !important;
}

.text-white {
  color: #fff !important;
}

.text-white {
  color: #fff !important;
}

a.text-white:hover,
a.text-white:focus {
  color: #e6e6e6 !important;
}

.text-muted {
  color: #8898aa !important;
}

@media print {

  *,
  *::before,
  *::after {
    box-shadow: none !important;
    text-shadow: none !important;
  }

  a:not(.btn) {
    text-decoration: underline;
  }

  img {
    page-break-inside: avoid;
  }

  p,
  h3 {
    orphans: 3;
    widows: 3;
  }

  h3 {
    page-break-after: avoid;
  }

  .page {
    size: a3;
  }

  body {
    min-width: 992px !important;
  }

  .container {
    min-width: 992px !important;
  }

  .navbar {
    display: none;
  }
}

figcaption,
main {
  display: block;
}

main {
  overflow: hidden;
}

.bg-white {
  background-color: #fff !important;
}

a.bg-white:hover,
a.bg-white:focus,
 .bg-white {
  background-color: #e6e6e6 !important;
}

.bg-gradient-default {
  background: linear-gradient(87deg, #172b4d 0, #1a174d 100%) !important;
}

.bg-gradient-default {
  background: linear-gradient(87deg, #172b4d 0, #1a174d 100%) !important;
}

@keyframes floating-lg {
  0% {
    transform: translateY(0px);
  }

  50% {
    transform: translateY(15px);
  }

  100% {
    transform: translateY(0px);
  }
}

@keyframes floating {
  0% {
    transform: translateY(0px);
  }

  50% {
    transform: translateY(10px);
  }

  100% {
    transform: translateY(0px);
  }
}

@keyframes floating-sm {
  0% {
    transform: translateY(0px);
  }

  50% {
    transform: translateY(5px);
  }

  100% {
    transform: translateY(0px);
  }
}

.opacity-8 {
  opacity: .8 !important;
}

.opacity-8 {
  opacity: .9 !important;
}

.center {
  left: 50%;
  transform: translateX(-50%);
}

[class*='shadow'] {
  transition: all .15s ease;
}

.font-weight-300 {
  font-weight: 300 !important;
}

.text-sm {
  font-size: .875rem !important;
}

.text-white {
  color: #fff !important;
}

a.text-white:hover,
a.text-white:focus {
  color: #e6e6e6 !important;
}

.avatar {
  font-size: 1rem;
  display: inline-flex;
  width: 48px;
  height: 48px;
  color: #fff;
  border-radius: 50%;
  background-color: #adb5bd;
  align-items: center;
  justify-content: center;
}

.avatar img {
  width: 100%;
  border-radius: 50%;
}

.avatar-sm {
  font-size: .875rem;
  width: 36px;
  height: 36px;
}

.btn {
  font-size: .875rem;
  position: relative;
  transition: all .15s ease;
  letter-spacing: .025em;
  text-transform: none;
  will-change: transform;
}

.btn:hover {
  transform: translateY(-1px);
  box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08);
}

.btn:not(:last-child) {
  margin-right: .5rem;
}

.btn i:not(:first-child) {
  margin-left: .5rem;
}

.btn i:not(:last-child) {
  margin-right: .5rem;
}

.input-group .btn {
  margin-right: 0;
  transform: translateY(0);
}

.btn-sm {
  font-size: .75rem;
}

[class*='btn-outline-'] {
  border-width: 1px;
}

.card-profile-image {
  position: relative;
}

.card-profile-image img {
  position: absolute;
  left: 50%;
  max-width: 180px;
  transition: all .15s ease;
  transform: translate(-50%, -30%);
  border-radius: .375rem;
}

.card-profile-image img:hover {
  transform: translate(-50%, -33%);
}

.card-profile-stats {
  padding: 1rem 0;
}

.card-profile-stats>div {
  margin-right: 1rem;
  padding: .875rem;
  text-align: center;
}

.card-profile-stats>div:last-child {
  margin-right: 0;
}

.card-profile-stats>div .heading {
  font-size: 1.1rem;
  font-weight: bold;
  display: block;
}

.card-profile-stats>div .description {
  font-size: .875rem;
  color: #adb5bd;
}

.main-content {
  position: relative;
}

.main-content .navbar-top {
  position: absolute;
  z-index: 1;
  top: 0;
  left: 0;
  width: 100%;
  padding-right: 0 !important;
  padding-left: 0 !important;
  background-color: transparent;
}

@media (min-width: 768px) {
  .main-content .container-fluid {
    padding-right: 39px !important;
    padding-left: 39px !important;
  }
}



.footer {
  padding: 2.5rem 0;
  background: #f7fafc;
}

.footer .nav .nav-item .nav-link {
  color: #8898aa !important;
}

.footer .nav .nav-item .nav-link:hover {
  color: #525f7f !important;
}

.footer .copyright {
  font-size: .875rem;
}

.form-control-label {
  font-size: .875rem;
  font-weight: 600;
  color: #ffffff;
}

.form-control {
  font-size: .875rem;
}

.form-control:focus:-ms-input-placeholder {
  color: #adb5bd;
}

.form-control:focus::-ms-input-placeholder {
  color: #adb5bd;
}

.form-control:focus::placeholder {
  color: #adb5bd;
}

textarea[resize='none'] {
  resize: none !important;
}

textarea[resize='both'] {
  resize: both !important;
}

textarea[resize='vertical'] {
  resize: vertical !important;
}

textarea[resize='horizontal'] {
  resize: horizontal !important;
}

.form-control-alternative {
  transition: box-shadow .15s ease;
  border: 0;
  box-shadow: 0 1px 3px rgba(50, 50, 93, .15), 0 1px 0 rgba(0, 0, 0, .02);
}

.form-control-alternative:focus {
  box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
}

.input-group {
  transition: all .15s ease;
  border-radius: .375rem;
  box-shadow: none;
}

.input-group .form-control {
  box-shadow: none;
}

.input-group .form-control:not(:first-child) {
  padding-left: 0;
  border-left: 0;
}

.input-group .form-control:not(:last-child) {
  padding-right: 0;
  border-right: 0;
}

.input-group .form-control:focus {
  box-shadow: none;
}

.input-group-text {
  transition: all .2s cubic-bezier(.68, -.55, .265, 1.55);
}

.input-group-alternative {
  transition: box-shadow .15s ease;
  border: 0;
  box-shadow: 0 1px 3px rgba(50, 50, 93, .15), 0 1px 0 rgba(0, 0, 0, .02);
}

.input-group-alternative .form-control,
.input-group-alternative .input-group-text {
  border: 0;
  box-shadow: none;
}

.focused .input-group-alternative {
  box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08) !important;
}

.focused .input-group {
  box-shadow: none;
}

.focused .input-group-text {
  color: #8898aa;
  border-color: rgba(50, 151, 211, .25);
  background-color: #fff;
}

.focused .form-control {
  border-color: rgba(50, 151, 211, .25);
}

.header {
  position: relative;
}

.input-group {
  transition: all .15s ease;
  border-radius: .375rem;
  box-shadow: none;
}

.input-group .form-control {
  box-shadow: none;
}

.input-group .form-control:not(:first-child) {
  padding-left: 0;
  border-left: 0;
}

.input-group .form-control:not(:last-child) {
  padding-right: 0;
  border-right: 0;
}

.input-group .form-control:focus {
  box-shadow: none;
}

.input-group-text {
  transition: all .2s cubic-bezier(.68, -.55, .265, 1.55);
}

.input-group-alternative {
  transition: box-shadow .15s ease;
  border: 0;
  box-shadow: 0 1px 3px rgba(50, 50, 93, .15), 0 1px 0 rgba(0, 0, 0, .02);
}

.input-group-alternative .form-control,
.input-group-alternative .input-group-text {
  border: 0;
  box-shadow: none;
}

.focused .input-group-alternative {
  box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08) !important;
}

.focused .input-group {
  box-shadow: none;
}

.focused .input-group-text {
  color: #8898aa;
  border-color: rgba(50, 151, 211, .25);
  background-color: #fff;
}

.focused .form-control {
  border-color: rgba(50, 151, 211, .25);
}

.mask {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transition: all .15s ease;
}

@media screen and (prefers-reduced-motion: reduce) {
  .mask {
    transition: none;
  }
}

.nav-link {
  color: #525f7f;
}

.nav-link:hover {
  color: #5e72e4;
}

.nav-link i.ni {
  position: relative;
  top: 2px;
}

.navbar-search .input-group {
  border: 2px solid;
  border-radius: 2rem;
  background-color: transparent;
}

.navbar-search .input-group .input-group-text {
  padding-left: 1rem;
  background-color: transparent;
}

.navbar-search .form-control {
  width: 270px;
  background-color: transparent;
}

.navbar-search-dark .input-group {
  border-color: rgba(255, 255, 255, .6);
}

.navbar-search-dark .input-group-text {
  color: rgba(255, 255, 255, .6);
}

.navbar-search-dark .form-control {
  color: rgba(255, 255, 255, .9);
}

.navbar-search-dark .form-control:-ms-input-placeholder {
  color: rgba(255, 255, 255, .6);
}

.navbar-search-dark .form-control::-ms-input-placeholder {
  color: rgba(255, 255, 255, .6);
}

.navbar-search-dark .form-control::placeholder {
  color: rgba(255, 255, 255, .6);
}

.navbar-search-dark .focused .input-group {
  border-color: rgba(255, 255, 255, .9);
}

@media (max-width: 767.98px) {
  .navbar-nav .nav-link {
    padding: .625rem 0;
    color: #172b4d !important;
  }

@keyframes show-navbar-collapse {
  0% {
    transform: scale(.95);
    transform-origin: 100% 0;
    opacity: 0;
  }

  100% {
    transform: scale(1);
    opacity: 1;
  }
}

@keyframes hide-navbar-collapse {
  from {
    transform: scale(1);
    transform-origin: 100% 0;
    opacity: 1;
  }

  to {
    transform: scale(.95);
    opacity: 0;
  }
}

.progress {
  overflow: hidden;
  height: 8px;
  margin-bottom: 1rem;
  border-radius: .25rem;
  background-color: #e9ecef;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
}

p {
  font-size: 1rem;
  font-weight: 300;
  line-height: 1.7;
}

.description {
  font-size: .875rem;
}

.heading {
  font-size: .95rem;
  font-weight: 600;
  letter-spacing: .025em;
  text-transform: uppercase;
}

.heading-small {
  font-size: .75rem;
  padding-top: .25rem;
  padding-bottom: .25rem;
  letter-spacing: .04em;
  text-transform: uppercase;
}

.display-2 span {
  font-weight: 300;
  display: block;
}

@media (max-width: 768px) {
  .btn {
    margin-bottom: 10px;
  }
}

#navbar .navbar {
  margin-bottom: 20px;
}
}
    </style>
<link rel="icon" 
type="image/png" 
href="../../../dist/img/tc2.png" /> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIP Training Center| Profile</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
</head>
<body class="hold-transition light-mode sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../../admin.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../contact/contact-us.php" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      <li class="dropdown user user-menu" align="center">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="../../../dist/img/<?php echo isset($_SESSION['image']) && !empty($_SESSION['image']) ? $_SESSION['image'] : 'default.jpg'; ?>" class="user-image" alt="User Image" style="margin: 3px 0 0 0;">
          <span class="hidden-xs" align="center"><?php echo "".$_SESSION['username']; ?></span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <img src="../../../dist/img/<?php echo isset($_SESSION['image']) && !empty($_SESSION['image']) ? $_SESSION['image'] : 'default.jpg'; ?>" class="img-circle" alt="User Image">
            <p>
            <?php echo "".$_SESSION['username']; ?> - Training Center Member
              <small>Member since <?php echo "".$_SESSION['join_date']; ?></small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <span class="btn-left">
              <a href="profile.php" class="btn btn-primary btn-flat">Profile</a>
            </span>
            <span class="btn-right">
              <a href="../../../logout.php" class="btn btn-danger btn-flat">Sign out</a>
            </span>
          </li>
        </ul>
      </li>
    </ul>
  </nav> 
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../../admin.php" class="brand-link bg-primary">
      <img src="../../../dist/img/tc2.png" alt="Sumitomo Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Training Centre</br> Sistem Informasi Pegawai</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../../dist/img/<?php echo isset($_SESSION['image']) && !empty($_SESSION['image']) ? $_SESSION['image'] : 'default.jpg'; ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo "".$_SESSION['username']; ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="../../../admin.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            <li class="nav-item">
              <a href="../../tables/data.php" class="nav-link">
                <i class="nav-icon fas fa-border-all"></i>
                <p>DataTables</p>
              </a>
            </li>
            <li class="nav-item">
                <a href="../../../excel/upload.php" class="nav-link">
                  <i class="nav-icon fas fa-cloud-upload-alt"></i>
                  <p>Upload Data</p>
                </a>
              </li>
        <li class="nav-header">Menu</li>
        <li class="nav-item">
          <a href="../../tables/pegawai/datapegawai.php" class="nav-link">
            <i class="nav-icon fas fa-chalkboard-teacher"></i>
            <p>
              Data Pegawai
              <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../tables/pegawai/datapegawai.php" class="nav-link">
                  <i class="nav-icon fa fa-users"></i>
                  <p>Pegawai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../examples/section.php" class="nav-link">
                  <i class="nav-icon fab fa-buromobelexperte"></i>
                  <p>Section</p>
                </a>
              </li>
              </ul>
          </a>
        </li>
        <li class="nav-item">
            <a href="../../assembly/skillmap.php" class="nav-link">
              <i class="nav-icon fab fa-autoprefixer"></i>
              <p>
                Assembly Access
                <span class="badge badge-primary right">
                <?php
 // menghubungkan dengan koneksi database
 include '../../../config/koneksi.php';
 $data_assy = mysqli_query($db,"SELECT * FROM pegawai where kode_section='450'");
 // menghitung data pegawai
 $jumlah_assy = mysqli_num_rows($data_assy);
 ?>
                <?php echo $jumlah_assy; ?>
                </span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../C&C/skillmap.php" class="nav-link">
              <i class="nav-icon fas fa-closed-captioning"></i>
              <p>
               C&C Access
               <span class="badge badge-primary right">
                <?php
 // menghubungkan dengan koneksi database
 include '../../../config/koneksi.php';
 $data_cc = mysqli_query($db,"SELECT * FROM pegawai where kode_section='410'");
 // menghitung data pegawai
 $jumlah_cc = mysqli_num_rows($data_cc);
 ?>
                <?php echo $jumlah_cc; ?>
                </span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../QC/skillmap.php" class="nav-link">
              <i class="nav-icon fab fa-quora"></i>
              <p>
              QC Access
              <span class="badge badge-primary right">
                <?php
 // menghubungkan dengan koneksi database
 include '../../../config/koneksi.php';
 $data_qc = mysqli_query($db,"SELECT * FROM pegawai where kode_section='420'");
 // menghitung data pegawai
 $jumlah_qc = mysqli_num_rows($data_qc);
 ?>
                <?php echo $jumlah_qc; ?>
                </span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../calendar.php" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Calendar
              </p>
            </a>
          </li>
<!--<li class="nav-item">
          <a href="../../examples/project/projects.php" class="nav-link">
            <i class="nav-icon fas fa-th-list"></i>
            <p>Projects</p>
          </a>
        </li>-->
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(../../dist/img/Teks.png); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h6 class="display-2 text-white">Hello <?php echo "".$_SESSION['username']; ?>!</h6>
            <p class="text-white mt-0 mb-5">This is your profile page.</p>
            <a href="../../../logout.php" class="btn btn-danger">Sign Out</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="../../../dist/img/<?php echo isset($_SESSION['image']) && !empty($_SESSION['image']) ? $_SESSION['image'] : 'default.jpg'; ?>" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
              <a href="edit_profile.php?id=<?php echo "".$_SESSION['id']; ?>" class="btn btn-sm btn-info mr-4">Edit Profile</a>
              <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal<?php echo "".$_SESSION['id']; ?>"><i class="fas fa-user-circle">Picture</i></button>

  <!-- Modal -->
  <div class="modal fade" id="myModal<?php echo "".$_SESSION['id']; ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Profile Picture</h4>
        </div>
        <div class="modal-body">
        <form action="user_act.php" method="post" enctype="multipart/form-data">
         <div class="form-group">
         <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
				<label>Foto :</label>
				<input type="file" name="foto" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
			</div>			
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>





              </div>
            </div>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                  </div>
                </div>
              </div>
              <div class="text-center">
                <br>
                <h4>
                <?php echo "".$_SESSION['username']; ?> - <?php echo "".$_SESSION['NIK']; ?>
                </h4>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>Training Centre Member
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i><?php echo "".$_SESSION['join_date']; ?> - <?php echo "".$_SESSION['finish_kontrak']; ?>
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>
                </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My account</h3>
                </div>
              </div>
            </div>
            <div class="card-body">
            <?php 
if(isset($_GET['pesan'])){
	$pesan = $_GET['pesan'];
	if($pesan == "input"){
		echo "Data berhasil di input.";
	}else if($pesan == "update"){
		echo "Data berhasil di update.";
	}else if($pesan == "hapus"){
		echo "Data berhasil di hapus.";
	}
}
?>
              <form>
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" readonly value="<?php echo "".$_SESSION['username']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-nama">Nama</label>
                       <input type="text" id="input-nama" class="form-control form-control-alternative" placeholder="Nama" readonly value="<?php echo "".$_SESSION['nama']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="text" id="input-email" class="form-control form-control-alternative" placeholder="email" readonly value="<?php echo "".$_SESSION['email']; ?>">
                      </div>
                    </div>
                  </div>

                
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">About me</h6>
                <div class="pl-lg-4">
                  <div class="form-group focused">
                    <label>About Me</label>
                    <input id="input-address" class="form-control form-control-alternative" placeholder="About Me" readonly value="<?php echo "".$_SESSION['about_me']; ?>" type="text">
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
<footer class="main-footer">
  <strong><center>Copyright &copy; 2014-2021 AdminLTE.io</a></strong>
    All rights reserved.
  <br>
      <strong><center>SIP TC is Powered  by <a href="pages/company/index.php">Training Centre</a></strong>.&nbsp Developed by <a href="https://adindaselfiani.wordpress.com/">Adselna </a></center>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
  </footer>
</div>
<!-- ./wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="../../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.min.js"></script>
<script src="../../../dist/js/demo.js"></script>
</body>
</html>