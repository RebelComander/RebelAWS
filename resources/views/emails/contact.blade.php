<html>
<head></head>
	<body>
		<table>
			<tr>
				<td>Hello my name is </td>
				<td>{{ $contactForm->name }}</td>
				<td>My email is </td>
				<td>{{ $contactForm->email }}</td>
				<td>Message:</td>
				<td>{{ $contactForm->message }}</td>
			</tr>
		</table>
	</body>
</html>