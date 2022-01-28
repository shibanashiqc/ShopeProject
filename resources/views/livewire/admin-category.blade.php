
@if($edit_page == true)


<div class="relative min-h-screen flex items-center justify-center bg-center bg-white-50 py-12 px-4 sm:px-6 lg:px-8 bg-white-500 bg-no-repeat bg-cover relative items-center">
    <div class="absolute bg-white opacity-60 inset-0 z-0"></div>
    <div class="max-w-md w-full space-y-8 p-10 bg-white rounded-xl shadow-lg z-10">
<div class="grid  gap-8 grid-cols-1">
    <div class="flex flex-col ">
            <div class="flex flex-col sm:flex-row items-center">
                <h2 class="font-semibold text-lg mr-auto">Edit Category</h2>
                <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
            </div>
            <div class="mt-5">
                <form class="form-horizontal">

                        <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                            <div class="mb-3 space-y-2 w-full text-xs">
                                <label class="font-semibold text-gray-600 py-2">Catgegory Name <abbr title="required">*</abbr></label>
                                <input value="" wire:model='c_name' placeholder="Name" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="integration[shop_name]" id="integration_shop_name">
                                @error('c_name')  <p class="text-danger">{{$message}}</p> @enderror
                            </div>

                        </div>


                                <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
                                    <a href="/admin/category" class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100"> Back </a>
                                    <button wire:click.prevent='editCategory' class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500">
                                        <i wire:loading wire:target="editCategory" class="fa fa-spinner fa-spin" style="font-size:20px"></i> &nbsp;Save</button>
                                </div>


                            </div>

                        </form>
                        </div>
                        <span style="color: green; text-align:center;"> {{ $msg }}</span>
                    </div>
                </div>
            </div>


@endif




@if($createpage == true)


<div class="relative min-h-screen flex items-center justify-center bg-center bg-white-50 py-12 px-4 sm:px-6 lg:px-8 bg-white-500 bg-no-repeat bg-cover relative items-center">
    <div class="absolute bg-white opacity-60 inset-0 z-0"></div>
    <div class="max-w-md w-full space-y-8 p-10 bg-white rounded-xl shadow-lg z-10">
<div class="grid  gap-8 grid-cols-1">
    <div class="flex flex-col ">
            <div class="flex flex-col sm:flex-row items-center">
                <h2 class="font-semibold text-lg mr-auto">Create Category</h2>
                <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
            </div>
            <div class="mt-5">
                <form class="form-horizontal">

                        <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                            <div class="mb-3 space-y-2 w-full text-xs">
                                <label class="font-semibold text-gray-600 py-2">Catgegory Name <abbr title="required">*</abbr></label>
                                <input value="" wire:model='ca_name' placeholder="Name" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="integration[shop_name]" id="integration_shop_name">
                                @error('ca_name')  <p class="text-danger">{{$message}}</p> @enderror
                            </div>

                        </div>


                                <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
                                    <a href="/admin/category" class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100"> Back </a>
                                    <button wire:click.prevent='createCategory' class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500">
                                        <i wire:loading wire:target="createCategory" class="fa fa-spinner fa-spin" style="font-size:20px"></i> &nbsp;Save</button>
                                </div>


                            </div>

                        </form>
                        </div>
                        <span style="color: green; text-align:center;"> {{ $msgx }}</span>
                    </div>
                </div>
            </div>


@endif






<div class="bg-white p-8 rounded-md w-full">
	<div class=" flex items-center justify-between pb-6">
		<div>
			<h2 class="text-gray-600 font-semibold">Configure</h2>
			<span class="text-xs">All automation status</span>
		</div>
		<div class="flex items-center justify-between">
			<div class="flex bg-gray-50 items-center p-2 rounded-md">


          </div>
				<div class="lg:ml-40 ml-10 space-x-8">
					<button wire:click="createpage" class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">
                        <i wire:loading wire:target="createpage" class="fa fa-spinner fa-spin" style="font-size:20px"></i> &nbsp;   Add Category</button>
				</div>
			</div>
		</div>
		<div>
			<div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
				<div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
					<table class="min-w-full leading-normal">
						<thead>
							<tr>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									ID
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Category Name
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Edit
								</th>
                                <th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Delete
								</th>
							</tr>
						</thead>
						<tbody>
                          @foreach ($category as $categorys)


                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap"># {{ $categorys->id }}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ $categorys->name }}</p>
                                </td>

                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <button wire:click="editpage('{{  $categorys->id }}')" class="font-bold bg-blue-600 hover:bg-blue-700 text-white rounded-md px-10 py-2 transition-colors">
                                    <i wire:loading wire:target="editpage" class="fa fa-spinner fa-spin" style="font-size:20px"></i> &nbsp;   Edit
                                </button>
                            </td>

                            <td>
                                <button class="font-bold bg-red-600 hover:bg-red-700 text-white rounded-md px-10 py-2 transition-colors" wire:click="delete('{{ $categorys->id }}')">
                                    <i wire:loading wire:target="delete" class="fa fa-spinner fa-spin" style="font-size:20px"></i>
                                  Delete  </button>

                            </td>
                            </tr>

                            @endforeach

                             {{ $category->links() }}
                             <br><br>
						</tbody>
					</table>

					</div>
				</div>

		</div>

