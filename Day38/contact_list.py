# Contact List Application

# Collection to store contacts
contacts = []
next_id = 1  # To manage unique IDs for contacts

# Function to display all contacts
def display_contacts():
    if not contacts:
        print("Contact list is empty.")
        return
    print("\nID\tName\tPhone Number")
    print("=" * 30)
    for contact in contacts:
        print(f"{contact['id']}\t{contact['name']}\t{contact['phone']}")
    print()

# Function to add a new contact
def add_contact(name, phone):
    global next_id
    contact = {
        'id': next_id,
        'name': name,
        'phone': phone
    }
    contacts.append(contact)
    next_id += 1
    print(f"Contact '{name}' added successfully!")

# Function to update an existing contact by ID
def update_contact(contact_id, new_name, new_phone):
    for contact in contacts:
        if contact['id'] == contact_id:
            contact['name'] = new_name
            contact['phone'] = new_phone
            print(f"Contact with ID {contact_id} updated successfully!")
            return
    print(f"Contact with ID {contact_id} not found.")

# Function to delete a contact by ID
def delete_contact(contact_id):
    global contacts
    contacts = [contact for contact in contacts if contact['id'] != contact_id]
    print(f"Contact with ID {contact_id} deleted successfully!")

# Main program to interact with the contact list
def main():
    while True:
        print("\nContact List Menu:")
        print("1. Display Contacts")
        print("2. Add Contact")
        print("3. Update Contact")
        print("4. Delete Contact")
        print("5. Exit")
        choice = input("Choose an option: ")

        if choice == "1":
            display_contacts()
        elif choice == "2":
            name = input("Enter contact name: ")
            phone = input("Enter contact phone number: ")
            add_contact(name, phone)
        elif choice == "3":
            try:
                contact_id = int(input("Enter contact ID to update: "))
                new_name = input("Enter new name: ")
                new_phone = input("Enter new phone number: ")
                update_contact(contact_id, new_name, new_phone)
            except ValueError:
                print("Invalid ID. Please enter a number.")
        elif choice == "4":
            try:
                contact_id = int(input("Enter contact ID to delete: "))
                delete_contact(contact_id)
            except ValueError:
                print("Invalid ID. Please enter a number.")
        elif choice == "5":
            print("Exiting the application. Goodbye!")
            break
        else:
            print("Invalid option. Please choose a valid option.")

if __name__ == "__main__":
    main()
