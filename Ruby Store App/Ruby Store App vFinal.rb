#TODO: sprintf() to round decimal points 

class Shopper
	def Shopper.init
	# initialize class variables 
	@grandTotal = 0
	@shipping = 0
#Change to current directory for convenience 
	Dir.chdir("C:/Users/TNT/Google Drive/Seminar SP 2016")

#open file
	@target = open("TorMaHowSuperStoreReceipt.txt", 'w')

#write to file 
	@target.puts "TorMaHow Super Store Receipt:"
	end
#-----------------------------------------------------------------------------------------------------------
	def Shopper.main
		Shopper.init
		# IMPORTANT DOCUMENT INFO: IF YOU PASS A STRING TO THE NUMBER OF ANY ITEM THEN THAT NUMBER PASSED BECOMES 0
		# If a string is passed to numItem (via .to_i) then the resulting int is 0  
		while true do 
			begin
			puts ""
			puts "What are you shopping for today?"
			puts "1: Clothing"
			puts "2: School Supplies"
			puts "3: Electronics"
			puts "4: Furniture"
			puts "5: Food"
			puts "6: Checkout"
			puts "Option: "
			@option = gets.chomp
			case @option
			when "1"
				Shopper.clothing
			when "2"
				Shopper.school_supplies
			when "3"
				Shopper.electronics
			when "4"
				Shopper.furniture
			when "5"
				Shopper.food
			when "6"
				if @grandTotal == 0
				puts "You haven't bought anything yet!"
				else 
					Shopper.checkout
					break
				end
			else
				# raise an exception in order to go to retry 
					puts "Invalid Option"
					puts "Please Try Again"
					puts ""
					raise 'IOException'
			end
			end
		end
		rescue
			retry
		end
#-----------------------------------------------------------------------------------------------------------
	def Shopper.clothing
		begin 
		puts "What type of clothing are you looking for today?"
		puts "1: Shirts"
		puts "2: Jeans"
		puts "3: Socks"
		puts "4: Beanies"
		puts "5: Shorts"
		puts "6 Jackets"
		puts "Option: "
		clothing = gets.chomp
		case clothing
		when "1"
			begin
			puts "Each Shirt costs $19.99"
			puts "How many Shirts do you want: "
			numItem = gets.to_i
			if numItem == 0
				raise 'IOException'
			end
			if numItem < 0
				raise 'IOException'
			end 
			rescue
				puts "Invalid Option"
				puts "Pass an integer greater than 0 and Try Again"
				puts ""
				retry
			end
			transTotal = numItem * 19.99 
			@grandTotal += transTotal 
			if numItem > 0
				@shipping += 3.99
			end
			puts "Your total for that transaction is $#{transTotal.round(2)}"
			puts "Your grand total so far is $#{@grandTotal.round(2)}"
			@target.puts "Shirts: #{numItem}"
			@target.puts "Cost: #{transTotal.round(2)}"
			@target.puts ""
		when "2"
			begin
			puts "Each pair of Jeans costs $29.99"
			puts "How many pairs of Jeans do you want: "
			numItem = gets.to_i 
			if numItem == 0
				raise 'IOException'
			end
			if numItem < 0
				raise 'IOException'
			end 
			rescue
				puts "Invalid Option"
				puts "Pass an integer greater than 0 and Try Again"
				puts ""
				retry
			end
			transTotal = numItem * 29.99 
			@grandTotal += transTotal 
			if numItem > 0
				@shipping += 3.99
			end
			puts "Your total for that transaction is $#{transTotal.round(2)}"
			puts "Your grand total so far is $#{@grandTotal.round(2)}"
			@target.puts "Jeans: #{numItem}"
			@target.puts "Cost: #{transTotal.round(2)}"
			@target.puts ""
		when "3"
			begin
			puts "Each pair of Socks costs $5.99"
			puts "How many pairs of Socks do you want: "
			numItem = gets.to_i
			if numItem == 0
				raise 'IOException'
			end
			if numItem < 0
				raise 'IOException'
			end 
			rescue
				puts "Invalid Option"
				puts "Pass an integer greater than 0 and Try Again"
				puts ""
				retry
			end
			transTotal = numItem * 5.99 
			@grandTotal += transTotal 
			if numItem > 0
				@shipping += 3.99
			end
			puts "Your total for that transaction is $#{transTotal.round(2)}"
			puts "Your grand total so far is $#{@grandTotal.round(2)}"
			@target.puts "Socks: #{numItem}"
			@target.puts "Cost: #{transTotal.round(2)}"
			@target.puts ""
		when "4"
			begin
			puts "Each Beanie costs $14.95"
			puts "How many Beanie do you want: "
			numItem = gets.to_i 
			if numItem == 0
				raise 'IOException'
			end
			if numItem < 0
				raise 'IOException'
			end 
			rescue
				puts "Invalid Option"
				puts "Pass an integer greater than 0 and Try Again"
				puts ""
				retry
			end
			transTotal = numItem * 14.95 
			@grandTotal += transTotal
			if numItem > 0
				@shipping += 3.99
			end
			puts "Your total for that transaction is $#{transTotal.round(2)}"
			puts "Your grand total so far is $#{@grandTotal.round(2)}"
			@target.puts "Beanies: #{numItem}"
			@target.puts "Cost: #{transTotal.round(2)}"
			@target.puts ""
		when "5"
			begin
			puts "Each pair of Shorts costs $24.99"
			puts "How many pairs of Shorts do you want: "
			numItem = gets.to_i
			if numItem == 0
				raise 'IOException'
			end
			if numItem < 0
				raise 'IOException'
			end 
			rescue
				puts "Invalid Option"
				puts "Pass an integer greater than 0 and Try Again"
				puts ""
				retry
			end
			transTotal = numItem * 24.99 
			@grandTotal += transTotal
			if numItem > 0
				@shipping += 3.99
			end
			puts "Your total for that transaction is $#{transTotal.round(2)}"
			puts "Your grand total so far is $#{@grandTotal.round(2)}"
			@target.puts "Shorts: #{numItem}"
			@target.puts "Cost: #{transTotal.round(2)}"
			@target.puts ""
		when "6"
			begin
			puts "Each Jacket costs $44.99"
			puts "How many Jackets do you want: "
			numItem = gets.to_i
			if numItem == 0
				raise 'IOException'
			end
			if numItem < 0
				raise 'IOException'
			end 
			rescue
				puts "Invalid Option"
				puts "Pass an integer greater than 0 and Try Again"
				puts ""
				retry
			end
			transTotal = numItem * 44.99 
			@grandTotal += transTotal 
			if numItem > 0
				@shipping += 4.99
			end
			puts "Your total for that transaction is $#{transTotal.round(2)}"
			puts "Your grand total so far is $#{@grandTotal.round(2)}"
			@target.puts "Jackets: #{numItem}"
			@target.puts "Cost: #{transTotal.round(2)}"
			@target.puts ""
		else
			puts "Gets to Else keyword"
			# raise an exception in order to go to retry 
			raise 'IOException'
		end
		rescue
			puts "Gets to Rescue Keyword"
			puts "Invalid Option"
			puts "Please Try Again"
			puts ""
			retry
		end
		end
#-----------------------------------------------------------------------------------------------------------
	def Shopper.school_supplies
		begin
		puts "What type of school supplies are you looking for today?"
		puts "1: Rulers"
		puts "2: Notebooks"
		puts "3: Pencils"
		puts "Option: "
		sSupply = gets.chomp
		case sSupply
		when "1"
			begin
			puts "Each Ruler costs $1.99"
			puts "How many Rulers do you want: "
			numItem = gets.to_i 
			if numItem == 0
				raise 'IOException'
			end
			if numItem < 0
				raise 'IOException'
			end 
			rescue
				puts "Invalid Option"
				puts "Pass an integer greater than 0 and Try Again"
				puts ""
				retry
			end
			transTotal = numItem * 1.99 
			@grandTotal += transTotal
			if numItem > 0
				@shipping += 2.99
			end
			puts "Your total for that transaction is $#{transTotal.round(2)}"
			puts "Your grand total so far is $#{@grandTotal.round(2)}"
			@target.puts "Rulers: #{numItem}"
			@target.puts "Cost: #{transTotal.round(2)}"
			@target.puts ""
		when "2"
			begin
			puts "Each Notebook costs $3.99"
			puts "How many Notebooks do you want: "
			numItem = gets.to_i 
			if numItem == 0
				raise 'IOException'
			end
			if numItem < 0
				raise 'IOException'
			end 
			rescue
				puts "Invalid Option"
				puts "Pass an integer greater than 0 and Try Again"
				puts ""
				retry
			end
			transTotal = numItem * 3.99 
			@grandTotal += transTotal 
			if numItem > 0
				@shipping += 3.99
			end
			puts "Your total for that transaction is $#{transTotal.round(2)}"
			puts "Your grand total so far is $#{@grandTotal.round(2)}"
			@target.puts "Notebooks: #{numItem}"
			@target.puts "Cost: #{transTotal.round(2)}"
			@target.puts ""
		when "3"
			begin
			puts "Each Pencil costs $.25"
			puts "How many Pencils do you want: "
			numItem = gets.to_i
			if numItem == 0
				raise 'IOException'
			end
			if numItem < 0
				raise 'IOException'
			end 
			rescue
				puts "Invalid Option"
				puts "Pass an integer greater than 0 and Try Again"
				puts ""
				retry
			end
			transTotal = numItem * 0.25 
			@grandTotal += transTotal 
			if numItem > 0
				@shipping += 2.99
			end
			puts "Your total for that transaction is $#{transTotal.round(2)}"
			puts "Your grand total so far is $#{@grandTotal.round(2)}"
			@target.puts "Pencils: #{numItem}"
			@target.puts "Cost: #{transTotal.round(2)}"
			@target.puts ""
		else
			# raise an exception in order to go to retry 
			raise 'IOException'
		end
		rescue
			puts "Invalid Option"
			puts "Please Try Again"
			puts ""
			retry
		end
		end
#-----------------------------------------------------------------------------------------------------------
	def Shopper.electronics
		begin
		puts "What type of electronics are you looking for today?"
		puts "1: TVs"
		puts "2: Smart Phones"
		puts "3: Smart Watches"
		puts "4: Laptops"
		puts "5: Game Consoles"
		puts "Option: "
		electronic = gets.chomp
		case electronic
		when "1"
			begin
			puts "Each TV costs $249.99"
			puts "How many TVs do you want: "
			numItem = gets.to_i
			if numItem == 0
				raise 'IOException'
			end
			if numItem < 0
				raise 'IOException'
			end 
			rescue
				puts "Invalid Option"
				puts "Pass an integer greater than 0 and Try Again"
				puts ""
				retry
			end
			transTotal = numItem * 249.99 
			@grandTotal += transTotal 
			if numItem > 0
				@shipping += 28.99
			end
			puts "Your total for that transaction is $#{transTotal.round(2)}"
			puts "Your grand total so far is $#{@grandTotal.round(2)}"
			@target.puts "TVs: #{numItem}"
			@target.puts "Cost: #{transTotal.round(2)}"
			@target.puts ""
		when "2"
			begin
			puts "Each Smart Phone costs $549.99"
			puts "How many Smart Phones do you want: "
			numItem = gets.to_i 
			if numItem == 0
				raise 'IOException'
			end
			if numItem < 0
				raise 'IOException'
			end 
			rescue
				puts "Invalid Option"
				puts "Pass an integer greater than 0 and Try Again"
				puts ""
				retry
			end
			transTotal = numItem * 549.99 
			@grandTotal += transTotal 
			if numItem > 0
				@shipping += 3.99
			end
			puts "Your total for that transaction is $#{transTotal.round(2)}"
			puts "Your grand total so far is $#{@grandTotal.round(2)}"
			@target.puts "Smart Phones: #{numItem}"
			@target.puts "Cost: #{transTotal.round(2)}"
			@target.puts ""
		when "3"
			begin
			puts "Each Smart Watch costs $75.95"
			puts "How many Smart Watches do you want: "
			numItem = gets.to_i
			if numItem == 0
				raise 'IOException'
			end
			if numItem < 0
				raise 'IOException'
			end 
			rescue
				puts "Invalid Option"
				puts "Pass an integer greater than 0 and Try Again"
				puts ""
				retry
			end
			transTotal = numItem * 75.95
			@grandTotal += transTotal 
			if numItem > 0
				@shipping += 3.99
			end
			puts "Your total for that transaction is $#{transTotal.round(2)}"
			puts "Your grand total so far is $#{@grandTotal.round(2)}"
			@target.puts "Smart Watches: #{numItem}"
			@target.puts "Cost: #{transTotal.round(2)}"
			@target.puts ""
		when "4"
			begin
			puts "Each Laptop costs $1,085.99"
			puts "How many Laptops do you want: "
			numItem = gets.to_i 
			if numItem == 0
				raise 'IOException'
			end
			if numItem < 0
				raise 'IOException'
			end 
			rescue
				puts "Invalid Option"
				puts "Pass an integer greater than 0 and Try Again"
				puts ""
				retry
			end
			transTotal = numItem * 1085.99
			@grandTotal += transTotal 
			if numItem > 0
				@shipping += 9.99
			end
			puts "Your total for that transaction is $#{transTotal.round(2)}"
			puts "Your grand total so far is $#{@grandTotal.round(2)}"
			@target.puts "Laptops: #{numItem}"
			@target.puts "Cost: #{transTotal.round(2)}"
			@target.puts ""
		when "5"
			begin
			puts "Each Game Console costs $399.99"
			puts "How many Game Consoles do you want: "
			numItem = gets.to_i 
			if numItem == 0
				raise 'IOException'
			end
			if numItem < 0
				raise 'IOException'
			end 
			rescue
				puts "Invalid Option"
				puts "Pass an integer greater than 0 and Try Again"
				puts ""
				retry
			end
			transTotal = numItem * 399.99 
			@grandTotal += transTotal 
			if numItem > 0
				@shipping += 9.99
			end
			puts "Your total for that transaction is $#{transTotal.round(2)}"
			puts "Your grand total so far is $#{@grandTotal.round(2)}"
			@target.puts "Game Consoles: #{numItem}"
			@target.puts "Cost: #{transTotal.round(2)}"
			@target.puts ""
		else
		# raise an exception in order to go to retry 
			raise 'IOException'
		end
		rescue
			puts "Invalid Option"
			puts "Please Try Again"
			puts ""
			retry
		end
		end
#-----------------------------------------------------------------------------------------------------------
	def Shopper.furniture
		begin
		puts "What type of Furniture are you looking for today?"
		puts "1: Tables"
		puts "2: Couches"
		puts "3: Book Shelves"
		puts "4: Chairs"
		puts "Option: "
		furniture = gets.chomp
		case furniture
		when "1"
			begin
			puts "Each Table costs $109.99"
			puts "How many Tables do you want: "
			numItem = gets.to_i
			if numItem == 0
				raise 'IOException'
			end
			if numItem < 0
				raise 'IOException'
			end 
			rescue
				puts "Invalid Option"
				puts "Pass an integer greater than 0 and Try Again"
				puts ""
				retry
			end
			transTotal = numItem * 109.99 
			@grandTotal += transTotal 
			if numItem > 0
				@shipping += 24.99
			end
			puts "Your total for that transaction is $#{transTotal.round(2)}"
			puts "Your grand total so far is $#{@grandTotal.round(2)}"
			@target.puts "Tables: #{numItem}"
			@target.puts "Cost: #{transTotal.round(2)}"
			@target.puts ""
		when "2"
			begin
			puts "Each Couch costs $249.99"
			puts "How many Couches do you want: "
			numItem = gets.to_i 
			if numItem == 0
				raise 'IOException'
			end
			if numItem < 0
				raise 'IOException'
			end 
			rescue
				puts "Invalid Option"
				puts "Pass an integer greater than 0 and Try Again"
				puts ""
				retry
			end
			transTotal = numItem * 249.99 
			@grandTotal += transTotal 
			if numItem > 0
				@shipping += 40.99
			end
			puts "Your total for that transaction is $#{transTotal.round(2)}"
			puts "Your grand total so far is $#{@grandTotal.round(2)}"
			@target.puts "Couches: #{numItem}"
			@target.puts "Cost: #{transTotal.round(2)}"
			@target.puts ""
		when "3"
			begin
			puts "Each Book Shelf costs $95.95"
			puts "How many Book Shelves do you want: "
			numItem = gets.to_i
			if numItem == 0
				raise 'IOException'
			end
			if numItem < 0
				raise 'IOException'
			end 
			rescue
				puts "Invalid Option"
				puts "Pass an integer greater than 0 and Try Again"
				puts ""
				retry
			end
			transTotal = numItem * 95.95
			@grandTotal += transTotal 
			if numItem > 0
				@shipping += 27.99
			end
			puts "Your total for that transaction is $#{transTotal.round(2)}"
			puts "Your grand total so far is $#{@grandTotal.round(2)}"
			@target.puts "Book Shelves: #{numItem}"
			@target.puts "Cost: #{transTotal.round(2)}"
			@target.puts ""
		when "4"
			begin
			puts "Each Chair costs $24.99"
			puts "How many Chairs do you want: "
			numItem = gets.to_i
			if numItem == 0
				raise 'IOException'
			end
			if numItem < 0
				raise 'IOException'
			end 
			rescue
				puts "Invalid Option"
				puts "Pass an integer greater than 0 and Try Again"
				puts ""
				retry
			end
			transTotal = numItem * 24.99
			@grandTotal += transTotal
			if numItem > 0
				@shipping += 13.99
			end
			puts "Your total for that transaction is $#{transTotal.round(2)}"
			puts "Your grand total so far is $#{@grandTotal.round(2)}"
			@target.puts "Chairs: #{numItem}"
			@target.puts "Cost: #{transTotal.round(2)}"
			@target.puts ""
		end
		rescue
			puts "Invalid Option"
			puts "Please Try Again"
			puts ""
			retry
		end
		end
#-----------------------------------------------------------------------------------------------------------
	def Shopper.food
		begin
		puts "What type of Food are you looking for today?"
		puts "1: Oranges"
		puts "2: Chicken"
		puts "3: Cereal"
		puts "4: French Fries"
		puts "5: Granola Bars"
		puts "6: Burger Patties"
		puts "7: Taco Kits"
		puts "8: Cookies"
		puts "9: Tomatoes"
		puts "Option: "
		food = gets.chomp
		case food
		when "1"
			begin
			puts "Each bag of Oranges costs $6.99"
			puts "How many bags of Oranges do you want: "
			numItem = gets.to_i
			if numItem == 0
				raise 'IOException'
			end
			if numItem < 0
				raise 'IOException'
			end 
			rescue
				puts "Invalid Option"
				puts "Pass an integer greater than 0 and Try Again"
				puts ""
				retry
			end
			transTotal = numItem * 6.99 
			@grandTotal += transTotal
			if numItem > 0
				@shipping += 3.99
			end
			puts "Your total for that transaction is $#{transTotal.round(2)}"
			puts "Your grand total so far is $#{@grandTotal.round(2)}"
			@target.puts "Bags of Oranges: #{numItem}"
			@target.puts "Cost: #{transTotal.round(2)}"
			@target.puts ""
		when "2"
			begin
			puts "Each package of Chicken costs $9.99"
			puts "How many packages of Chicken do you want: "
			numItem = gets.to_i 
			if numItem == 0
				raise 'IOException'
			end
			if numItem < 0
				raise 'IOException'
			end 
			rescue
				puts "Invalid Option"
				puts "Pass an integer greater than 0 and Try Again"
				puts ""
				retry
			end
			transTotal = numItem * 9.99 
			@grandTotal += transTotal 
			if numItem > 0
				@shipping += 3.99
			end
			puts "Your total for that transaction is $#{transTotal.round(2)}"
			puts "Your grand total so far is $#{@grandTotal.round(2)}"
			@target.puts "Chicken Packages: #{numItem}"
			@target.puts "Cost: #{transTotal.round(2)}"
			@target.puts ""
		when "3"
			begin
			puts "Each box of Cereal costs $4.99"
			puts "How many boxes of Cereal do you want: "
			numItem = gets.to_i
			if numItem == 0
				raise 'IOException'
			end
			if numItem < 0
				raise 'IOException'
			end 
			rescue
				puts "Invalid Option"
				puts "Pass an integer greater than 0 and Try Again"
				puts ""
				retry
			end
			transTotal = numItem * 4.99
			@grandTotal += transTotal 
			if numItem > 0
				@shipping += 3.99
			end
			puts "Your total for that transaction is $#{transTotal.round(2)}"
			puts "Your grand total so far is $#{@grandTotal.round(2)}"
			@target.puts "Boxes of Cereal: #{numItem}"
			@target.puts "Cost: #{transTotal.round(2)}"
			@target.puts ""
		when "4"
			begin
			puts "Each bag of French Fries costs $5.99"
			puts "How many bags of French Fries do you want: "
			numItem = gets.to_i 
			if numItem == 0
				raise 'IOException'
			end
			if numItem < 0
				raise 'IOException'
			end 
			rescue
				puts "Invalid Option"
				puts "Pass an integer greater than 0 and Try Again"
				puts ""
				retry
			end
			transTotal = numItem * 5.99
			@grandTotal += transTotal 
			if numItem > 0
				@shipping += 3.99
			end
			puts "Your total for that transaction is $#{transTotal.round(2)}"
			puts "Your grand total so far is $#{@grandTotal.round(2)}"
			@target.puts "Bags of French Fries: #{numItem}"
			@target.puts "Cost: #{transTotal.round(2)}"
			@target.puts ""
		when "5"
			begin
			puts "Each box of Granola Bars costs $3.99"
			puts "How many boxes of Granola Bars do you want: "
			numItem = gets.to_i
			if numItem == 0
				raise 'IOException'
			end
			if numItem < 0
				raise 'IOException'
			end 
			rescue
				puts "Invalid Option"
				puts "Pass an integer greater than 0 and Try Again"
				puts ""
				retry
			end
			transTotal = numItem * 3.99 
			@grandTotal += transTotal 
			if numItem > 0
				@shipping += 3.99
			end
			puts "Your total for that transaction is $#{transTotal.round(2)}"
			puts "Your grand total so far is $#{@grandTotal.round(2)}"
			@target.puts "Boxes of Granola Bars: #{numItem}"
			@target.puts "Cost: #{transTotal.round(2)}"
			@target.puts ""
		when "6"
			begin
			puts "Each package of Burger Patties costs $9.99"
			puts "How many packages of Burger Patties do you want: "
			numItem = gets.to_i 
			if numItem == 0
				raise 'IOException'
			end
			if numItem < 0
				raise 'IOException'
			end 
			rescue
				puts "Invalid Option"
				puts "Pass an integer greater than 0 and Try Again"
				puts ""
				retry
			end
			transTotal = numItem * 9.99 
			@grandTotal += transTotal 
			if numItem > 0
				@shipping += 3.99
			end
			puts "Your total for that transaction is $#{transTotal.round(2)}"
			puts "Your grand total so far is $#{@grandTotal.round(2)}"
			@target.puts "Burger Patty Packages: #{numItem}"
			@target.puts "Cost: #{transTotal.round(2)}"
			@target.puts ""
		when "7"
			begin
			puts "Each Taco Kit costs $10.95"
			puts "How many Taco Kits do you want: "
			numItem = gets.to_i
			if numItem == 0
				raise 'IOException'
			end
			if numItem < 0
				raise 'IOException'
			end 
			rescue
				puts "Invalid Option"
				puts "Pass an integer greater than 0 and Try Again"
				puts ""
				retry
			end
			transTotal = numItem * 10.95
			@grandTotal += transTotal 
			if numItem > 0
				@shipping += 3.99
			end
			puts "Your total for that transaction is $#{transTotal.round(2)}"
			puts "Your grand total so far is $#{@grandTotal.round(2)}"
			@target.puts "Taco Kits: #{numItem}"
			@target.puts "Cost: #{transTotal.round(2)}"
			@target.puts ""
		when "8"
			begin
			puts "Each box of Cookies costs $4.99"
			puts "How many boxes of Cookies do you want: "
			numItem = gets.to_i 
			if numItem == 0
				raise 'IOException'
			end
			if numItem < 0
				raise 'IOException'
			end 
			rescue
				puts "Invalid Option"
				puts "Pass an integer greater than 0 and Try Again"
				puts ""
				retry
			end
			transTotal = numItem * 4.99
			@grandTotal += transTotal 
			if numItem > 0
				@shipping += 3.99
			end
			puts "Your total for that transaction is $#{transTotal.round(2)}"
			puts "Your grand total so far is $#{@grandTotal.round(2)}"
			@target.puts "Boxes of Cookies: #{numItem}"
			@target.puts "Cost: #{transTotal.round(2)}"
			@target.puts ""
		when "9"
			begin
			puts "Each bag of Tomatoes costs 5.99"
			puts "How many bags of Tomatoes do you want: "
			numItem = gets.to_i
			if numItem == 0
				raise 'IOException'
			end
			if numItem < 0
				raise 'IOException'
			end 
			rescue
				puts "Invalid Option"
				puts "Pass an integer greater than 0 and Try Again"
				puts ""
				retry
			end
			transTotal = numItem * 5.99 
			@grandTotal += transTotal 
			if numItem > 0
				@shipping += 3.99
			end
			puts "Your total for that transaction is $#{transTotal.round(2)}"
			puts "Your grand total so far is $#{@grandTotal.round(2)}"
			@target.puts "Bags of Tomatoes: #{numItem}"
			@target.puts "Cost: #{transTotal.round(2)}"
			@target.puts ""	
		else
			# raise an exception in order to go to retry 
			raise 'IOException'
		end
		rescue
			puts "Invalid Option"
			puts "Please Try Again"
			puts ""
			retry
		end
	end
	def Shopper.checkout
		while true do 
			puts "What kind of shipping do you want?"
			puts "1: Standard 7 day shipping"
			puts "2: Expedited 3-4 day shipping"
			puts "3: Overnight 1 day shipping"
			puts "Option: "
			shipOption = gets.to_i
			if shipOption == 1
				break
			else if shipOption == 2 
				@shipping *= 2 
				break
			else if shipOption == 3
				@shipping *= 3 
				break 
			else 
			puts "Invalid Option"
			puts""
			end
			end
			end	
		end

# echo back charges and totals 
# print said charges and totals onto txt file 	
		puts ""
		puts "Your subtotal is $#{@grandTotal.round(2)}"
		@target.puts "Your subtotal is $#{@grandTotal.round(2)}"
		salesTax = 0.08 * @grandTotal
		puts "Your sales tax is $#{salesTax.round(2)}"
		@target.puts "Your sales tax is $#{salesTax.round(2)}"
		puts "Your Shipping Charge is $#{@shipping.round(2)}" 
		@target.puts "Your Shipping Charge is $#{@shipping.round(2)}" 
		@grandTotal += @shipping
		@grandTotal += salesTax
		puts "Your grand total is $#{@grandTotal.round(2)}"
		puts "Thank you for shopping at TorMaHow!"

		@target.puts "The grand total for your purchase is $#{@grandTotal.round(2)}"
		@target.puts ""
		@target.puts "Time of your transaction:"
		time = Time.new
		@target.puts time.ctime
		#close file 
		@target.close 
	end
end 
Shopper.main

