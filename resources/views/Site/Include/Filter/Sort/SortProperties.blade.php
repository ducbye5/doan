								<li><label>Sort by</label></li>
								<li>
									<select name="search[sortby]" data-placeholder="Sort by" class="chosen-select" id="sortProperties">
										<option value="name" @php if(!empty($data_sort) && $data_sort == 'name')echo 'selected'@endphp>Name</option>
										<option value="area" @php if(!empty($data_sort) && $data_sort == 'area')echo 'selected'@endphp>Area</option>
										<option value="date" @php if(!empty($data_sort) && $data_sort == 'date')echo 'selected'@endphp>Date</option>
									</select>
								</li>