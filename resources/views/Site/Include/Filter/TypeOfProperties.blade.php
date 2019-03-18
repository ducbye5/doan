<li><label>Type Of Property</label></li>
<li>
	<select name="search[typeofproperties]" class="chosen-select" id="typeofproperties">
		<option value="">-- All Property --</option>
		<option value="Dwelling_House" @php if(!empty($data_type) && $data_type == 'Dwelling_House')echo 'selected'@endphp>Dwelling House</option>
		<option value="Apartment" @php if(!empty($data_type) && $data_type == 'Apartment')echo 'selected'@endphp>Apartment</option>
		<option value="Land" @php if(!empty($data_type) && $data_type == 'Land')echo 'selected'@endphp>Land</option>
		<option value="Other_Real_Estate" @php if(!empty($data_type) && $data_type == 'Other_Real_Estate')echo 'selected'@endphp>Other Real Estate</option>
	</select>
</li>