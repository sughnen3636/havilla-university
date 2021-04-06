@component('mail::message')
<h1>New Admission Application</h1>
	A prospective student has recently applied on the school website, with the details below:<br/>
	<p><strong>First Name:</strong> {{ $prospect->f_name }}</p><br/><br/>
	<p><strong>Last Name:</strong> {{ $prospect->l_name }}</p><br/><br/>
	<p><strong>Other Names:</strong> {{ $prospect->o_name??'' }}</p><br/><br/>
	<p><strong>Phone Number:</strong> {{ $prospect->phone }}</p><br/><br/>
	<p><strong>Email:</strong> {{ $prospect->email }}</p><br/><br/>
	<p><strong>Course:</strong> {{ $prospect->course }}</p>
@endcomponent
