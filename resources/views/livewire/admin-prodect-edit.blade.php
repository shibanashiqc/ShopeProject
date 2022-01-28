<div class="relative min-h-screen flex items-center justify-center bg-center bg-white-50 py-12 px-4 sm:px-6 lg:px-8 bg-white-500 bg-no-repeat bg-cover relative items-center">
	<div class="absolute bg-white opacity-60 inset-0 z-0"></div>
	<div class="max-w-md w-full space-y-8 p-10 bg-white rounded-xl shadow-lg z-10">
<div class="grid  gap-8 grid-cols-1">
	<div class="flex flex-col ">
			<div class="flex flex-col sm:flex-row items-center">
				<h2 class="font-semibold text-lg mr-auto">Add Product</h2>
				<div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
			</div>
			<div class="mt-5">
				<form class="form-horizontal" enctype="multipart/form-data">

						<div class="md:flex flex-row md:space-x-4 w-full text-xs">
							<div class="mb-3 space-y-2 w-full text-xs">
								<label class="font-semibold text-gray-600 py-2">Product Name <abbr title="required">*</abbr></label>
								<input value="sdsdsdd" wire:model='pdname' placeholder="Name" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="integration[shop_name]" id="integration_shop_name">
								@error('pdname')  <p class="text-danger">{{$message}}</p> @enderror
							</div>
							<div class="mb-3 space-y-2 w-full text-xs">
								<label class="font-semibold text-gray-600 py-2">Product Price <abbr title="required">*</abbr></label>
								<input wire:model='price' placeholder="Price" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="integration[shop_name]" id="integration_shop_name">
								@error('price')  <p class="text-danger">{{$message}}</p> @enderror
							</div>
						</div>
                        <div class="w-full flex flex-col mb-3">
                            <label class="font-semibold text-gray-600 py-2">Featured<abbr title="required">*</abbr></label>
                            <select wire:model='feautured' class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full " required="required" name="integration[city_id]" id="integration_city_id">
                  <option value="1">Yes</option>
                  <option value="0">No</option>
    </select>
    @error('feautured')  <p class="text-danger">{{$message}}</p> @enderror
                        </div>
							<div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
								<div class="w-full flex flex-col mb-3">
									<label class="font-semibold text-gray-600 py-2">Quantity</label>
									<input wire:model='quantity' placeholder="Quantity" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" type="text" name="integration[street_address]" id="integration_street_address">
                                    @error('quantity')  <p class="text-danger">{{$message}}</p> @enderror
                                </div>
									<div class="w-full flex flex-col mb-3">
										<label class="font-semibold text-gray-600 py-2">Category<abbr title="required">*</abbr></label>
										<select wire:model='categoryy' class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full " required="required" name="integration[city_id]" id="integration_city_id">

                  @foreach ( $category as $categorys )
                  <option value="{{ $categorys->id }}">{{ $categorys->name }}</option>
                  @endforeach

                </select>
                @error('categoryy')  <p class="text-danger">{{$message}}</p> @enderror
									</div>
								</div>
								<div class="flex-auto w-full mb-1 text-xs space-y-2">
									<label class="font-semibold text-gray-600 py-2">Description</label>
									<textarea wire:model='description' required="" name="message" id="" class="w-full min-h-[100px] max-h-[300px] h-28 appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4" placeholder="Enter your comapny info" spellcheck="false"></textarea>
                                    @error('description')  <p class="text-danger">{{$message}}</p> @enderror
								</div>

                                <label class="font-semibold text-gray-600 py-2">Product image</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="image" />
                                    <br><br><br>
                                    @if($images)
                                        <img src="{{asset('images')}}/{{ $images }}" width="120" />
                                    @endif
                                    @if($image)
                                    <img src="{{$image->temporaryUrl()}}" width="120" />
                                    @endif
                                    @error('image')  <p class="text-danger">{{$message}}</p> @enderror
                                </div>

								<div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
									<a href="/admin/products" class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100"> Cancel </a>
									<button wire:click.prevent='editProduct' class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500">
                                        <i wire:loading wire:target="editProduct" class="fa fa-spinner fa-spin" style="font-size:20px"></i> &nbsp;Save</button>
								</div>


							</div>

                        </form>
						</div>
                        <span style="color: green; text-align:center;"> {{ $msg }}</span>
					</div>
				</div>
			</div>
