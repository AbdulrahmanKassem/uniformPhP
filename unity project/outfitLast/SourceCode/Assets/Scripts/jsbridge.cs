using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using System.Runtime.InteropServices;

public class jsbridge : MonoBehaviour
{
    [DllImport("__Internal")]
    private static extern void assignValues(string name, string value);

    [DllImport("__Internal")]
    private static extern void submitForm();

    public CustomizableGroup[] groupList;



    public void jsCall()
    {
        groupList = GetComponentsInChildren<CustomizableGroup>();
        //Write Data
        foreach (CustomizableGroup group in groupList)
        {

            for (int i = 0; i < group.Childs.Count; i++)
            {
                if (group.Childs[i].activeSelf)
                {
                    assignValues(group.gameObject.name, group.ItemID.ToString());
                }
            }

        }

        
        submitForm();

    }
}
