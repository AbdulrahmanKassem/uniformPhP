using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using UnityEngine.Networking;

public class LoadCustomizables : MonoBehaviour
{
    public CustomizationDataContainer LoadFrom;
    public CustomizableGroup[] GroupsToLoadID;
    private Color tmpColor = Color.white;
    public string group;
    public Renderer floor;
    public float scrollSpeed = 0.5f;
    public void newLoadinSystem()
    {
        //changeObject("Pants,650218FF,3|Shirt_Button_Zip,FFFFFFFF,0|Shirts,650218FF,0|Shirt Pockets,65041A00,5|Sleeves,6F011A00,0");
        group = Application.absoluteURL;
        string[] groupArr = group.Split("query=");
        Debug.Log("groupArr[0] ="+groupArr[0]);
        Debug.Log("groupArr[1] ="+groupArr[1]);
        changeObject(groupArr[1]);
    }
    private void Update()
    {
        float offset = Time.time * scrollSpeed;
        floor.material.mainTextureOffset = new Vector2(0, offset);
    }
    private void Start()
    {
       
        Debug.Log("Trying Load Customization Data1");
        GroupsToLoadID = GetComponentsInChildren<CustomizableGroup>();
        newLoadinSystem();
        //changeObject("Pants,650218FF,3|Shirt_Button_Zip,FFFFFFFF,0|Shirts,650218FF,0|Shirt Pockets,65041A00,5|Sleeves,6F011A00,0");
        //changeObject("Pants,FF0000,2|Shirts,FF0000,2");
        //Invoke("Save", 0.02f);
        //loadCloth();
        //changeObject("");
    }

    public void Save()
    {
        Debug.Log("Trying Load Customization Data2");
        if (LoadFrom.CustomizationGroupsData.Count != GroupsToLoadID.Length) return;
        LoadCustomizableGroups(GroupsToLoadID, LoadFrom);
    }
    public static void LoadCustomizableGroups(CustomizableGroup[] groupList, CustomizationDataContainer dataContainer)
    {
        Debug.Log("Tray To load Data");
        //Load Data
        for (int i = 0; i < groupList.Length; i++)
        {
            if (dataContainer.CustomizationGroupsData[i].GroupName == groupList[i].name)
            {
                groupList[i].ItemID = dataContainer.CustomizationGroupsData[i].CurrentGroupItemID;
                groupList[i].Color = dataContainer.CustomizationGroupsData[i].Color;
                groupList[i].UpdateVisibility();
                
            }
        }
        Debug.Log("The customization data was loaded successfully");
    }

    public void loadCloth()
    {
        string[] groupArr = group.Split("|");
        Debug.Log(groupArr.Length);
        for (int i2 = 0; i2 < groupArr.Length; i2++)
        {
            string[] groupArr2 = groupArr[i2].Split(",");

            for (int i = 0; i < GroupsToLoadID.Length; i++)
            {
                if (GroupsToLoadID[i].name == groupArr2[0])
                {
                    if (ColorUtility.TryParseHtmlString("#"+groupArr2[1], out tmpColor))
                    { GroupsToLoadID[i].Color = tmpColor; }
                    Debug.Log(groupArr2[1]);
                    GroupsToLoadID[i].ItemID = int.Parse(groupArr2[2]);

                    GroupsToLoadID[i].UpdateVisibility();

                }
            }
        }
    }

    public void changeObject(string groupParam)
    {
        Debug.Log("++++++++++Load Cloathes");
        group = groupParam;
        Invoke("loadCloth", 0.02f);
    }
}
