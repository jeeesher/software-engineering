@props(['totalPayables', 'totalPaid', 'totalSuppliers', 'totalPending'])

<div class="w-full h-40 relative">
    <div class="w-20 h-8 left-[24.62px] top-[14.84px] absolute text-center text-[#EFF0FF] text-lg font-medium font-['Inter'] leading-loose">Summary</div>
    <div class="w-full h-12 left-[25.62px] top-[75.84px] absolute justify-start items-end flex flex-wrap grid grid-cols-2 row-gap-8 md:grid-cols-4 text-[#EFF0FF]">
        <div class="space-y-2">
            <div class="text-base font-normal tracking-widest">Total Payables</div>
            <div class="text-2xl font-medium">{{ $totalPayables }}</div>
        </div>
        <div class="space-y-2"> 
            <div class="text-base font-normal tracking-widest">Total Paid</div>
            <div class="text-2xl font-medium">{{ $totalPaid }}</div>
        </div>
        <div class="space-y-2">
            <div class="text-base font-normal tracking-widest">Total Suppliers</div>
            <div class="text-2xl font-medium">{{ $totalSuppliers }}</div>
        </div>
        <div class="space-y-2">
            <div class="text-base font-normal tracking-widest">Total Pending for Voucher</div>
            <div class="text-2xl font-medium">{{ $totalPending }}</div>
            </div>
        </div>
    </div>
</div>