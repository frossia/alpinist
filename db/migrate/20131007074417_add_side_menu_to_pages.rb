class AddSideMenuToPages < ActiveRecord::Migration
  def change
    add_column :pages, :in_side_menu, :boolean, :default => false
  end
end
