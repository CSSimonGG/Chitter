<div class="pl-12 pr-6">
    <form action="create" method="POST">
        @csrf
        <textarea name="chit" id="chit" rows="4" placeholder="What's happening?" required
            class="resize-none outline-none w-11/12 text-lg"></textarea>
        <br>
        <div class="border-t-2">
            <button onclick="myfunction()" id="chitbutton"
                class="bg-red-500 hover:bg-red-600 rounded-full px-4 py-1 mt-1 font-bold text-white">Chit</button>
        </div>
    </form>
</div>
