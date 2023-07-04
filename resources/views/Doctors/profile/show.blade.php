<x-doctor.layout>
    <div class="account-details-wrapper mt-4 border-2 border-gray-200 rounded relative overflow-hidden p-2 flex gap-3 w-[80%]">
        <div class="icon-wrapper bg-gray-200 rounded p-2 pt-3 w-[8%] h-max text-center">
            <i class="fas fa-user-circle text-sky-600 text-xl "></i>
        </div>
        <div class="link-to-settings relative">
            <h2 class="text-sky-500 font-bold text-xl"> Account Details</h2>
            <div class="details-container flex flex-col gap-4 mt-4 relative">
                <div class="item">
                    <p>Name:</p>
                    <p>Dr John doe</p>
                </div>
                <div class="item">
                    <p>Email:</p>
                    <p>jodoe@maternity.co.tz</p>
                </div>
                <div class="item">
                    <p>Phone Number:</p>
                    <p>+255 712 345 678</p>
                </div>
                <div class="item">
                    <p>Profession:</p>
                    <p>Obstetrician</p>
                </div>
                <div class="item">
                    <p>Services:</p>
                    <p>Antenatal Care</p>
                </div>
           
            </div>
        </div>
    </div>
    <div class="account-settings-wrapper mt-4 border-2 border-gray-200 rounded relative overflow-hidden p-2 flex gap-3 w-[80%]">
        <div class="icon-wrapper bg-gray-200 rounded p-2 pt-3 text-center w-[8%]">
            <i class="fa-solid fa-user-pen text-orange-500 text-center text-xl ml-2"></i>
        </div>
        <div class="link-to-settings">
            <a href="#" class="text-orange-500 font-bold text-xl">Edit Account</a>
            <p>Edit your account details such as professions, services and phone number</p>
        </div>
    </div>

 

    <div class="delete-account mt-4 border-2 border-gray-200 rounded relative overflow-hidden p-2 flex gap-3 w-[80%]">
        <div class="icon-wrapper bg-gray-200 rounded p-2 w-[8%] text-center pt-3">
          
            <i class="fa-sharp fa-solid fa-trash text-red-500 text-xl "></i>
        </div>
        <div class="link-to-settings">
            <a href="#" class="text-red-500 font-bold text-xl">Delete Account</a>
            <p>Delete your account details such as professions, services and phone number</p>
        </div>
    </div>
</x-doctor.layout>